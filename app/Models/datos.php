<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class datos extends Model
{
    
	public $table = "datos";
    

	public $fillable = [
	    "users_id",
		"facebook",
		"google",
		"instagram",
		"nombres",
		"apellidos",
		"fecha_nacimiento",
		"genero",
		"telefono",
		"ciudad_id",
		"tipo_login",
		"avatar",
		"activo"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    
	];

}
