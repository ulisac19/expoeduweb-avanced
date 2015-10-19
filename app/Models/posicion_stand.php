<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class posicion_stand extends Model
{
    
	public $table = "posicion_stand";
    

	public $fillable = [
	    "numero",
		"x",
		"y",
		"orientacion"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "numero" => "required",
		"x" => "required",
		"y" => "required",
		"orientacion" => "required"
	];

}
