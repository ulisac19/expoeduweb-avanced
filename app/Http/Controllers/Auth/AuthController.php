<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Models\datos;

use Socialite;
use Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    protected $redirectTo = '/';
    
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'salir']);//getLogout
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider=NULL)
    {
        return Socialite::driver($provider)->redirect();

    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback($provider=NULL)
    {
        $user = Socialite::driver($provider)->user();
 
        $data = ['name'=>$user->name, 'email'=>$user->email, 'password'=>$user->token];
        $userDB = User::where('email', $user->email)->first();
        if(!is_null($userDB))
        {
            Auth::login($userDB);
        }else{
            Auth::login($this->create($data));
            $usuario = User::where('email', $user->email)->first();
            
            // agregar datos
            $datos = new datos;
           if($provider == "facebook")
            {      
                $user->user['gender'] == "male" ? $genero = 1 : $genero = 2;
                $datos->facebook = $user->id;           
                $datos->nombres = $user->user['first_name'];
                $datos->apellidos = $user->user['last_name'];
                $datos->genero = $genero;
                $datos->avatar = $user->avatar_original;          
                $datos->tipo_login = 2;
            }

            if($provider == "google")
            {            
                $user->user['gender'] == "male" ? $genero = 1 : $genero = 2;
                $datos->avatar = $user->avatar;
                $datos->nombres = $user->user["name"]["givenName"];
                $datos->apellidos = $user->user["name"]["familyName"];
                $datos->google = $user->user["url"];
                $datos->genero = $genero;
                $datos->tipo_login = 3;
            } 
            $datos->users_id =  $usuario->id;
            $datos->save(); 
           
   
        
        }
        return redirect()->route('home', ['user' => $user]);
        
        
    }

    public function salir()
    {  
        $datos = \App\Models\datos::where(['users_id'=>Auth::user()->id])->update(['activo'=>0]); 
        Auth::logout();
        return redirect()->route('home');
    } 

}   
