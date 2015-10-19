<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class feria extends Model
{
    
	public $table = "feria";
    

	public $fillable = [
	    "nombre",
		"descripcion",
		"archivos",
		"plano",
		"url",
		"responsable",
		"fecha_incio",
		"fecha_final",
		"fecha_desmontaje"
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
		"descripcion" => "required"
	];

}
