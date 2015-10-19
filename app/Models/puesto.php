<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class puesto extends Model
{
    
	public $table = "puesto";
    

	public $fillable = [
	    "nombre",
		"coordenadaX",
		"coordenadaY",
		"ancho",
		"largo"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "nombre" => "required"
	];

}
