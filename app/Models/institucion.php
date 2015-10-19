<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class institucion extends Model
{
    
	public $table = "institucion";
    

	public $fillable = [
	    "nombre",
		"direccion",
		"telefono",
		"email",
		"descripcion",
		"logo",
		"razon_social",
		"RIF",
		"website",
		"facebook",
		"twitter",
		"instagram",
		"responsable",
		"telefono_responsable",
		"correo_responsable"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "nombre" => "required",
		"direccion" => "required",
		"telefono" => "required",
		"email" => "required",
		"descripcion" => "required"
	];

}
