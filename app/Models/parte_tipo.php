<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class parte_tipo extends Model
{
    
	public $table = "parte_tipo";
    

	public $fillable = [
		"id",
	    "nombre",
		"clickeable",
		"tipo",
		"tipo_stand_id",
		"parte_stand_id",
		"dimension_parte_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
       // "clickeable" => "boolean"
    ];

	public static $rules = [
	    "nombre" => "required",
		"clickeable" => "required",
		"tipo" => "required",
		"tipo_stand_id" => "required",
		"x" => "required",
		"y" => "required",
		"ancho" => "required",
		"alto" => "required",
		"orientacion" => "required",
	];

}
