@extends('app')

@section('content')
      <div class="container">
          {!! Form::open(['route' => 'auth/login', 'class' => 'form-signin']) !!}
            <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                    {!! Form::email('email', '', ['class'=> 'form-control', 'placeholder'=>'Email address', 'required'=>true]) !!}

                <label for="inputPassword" class="sr-only">Password</label>
                    {!! Form::password('password', ['class'=> 'form-control', 'placeholder'=>'Password', 'required'=>true]) !!}
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="remember-me"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-block btn-social btn-vk" ><i class="glyphicon glyphicon-log-in"></i>Login</button>
            <a class="btn btn-social btn-block btn-facebook" href="facebook"><i class="fa fa-facebook"></i>Facebook</a>
            <a class="btn btn-social btn-block btn-google" href="google"><i class="fa fa-google"></i>Google</a>
          {!! Form::close() !!}
        </div> <!-- /container -->
@endsection