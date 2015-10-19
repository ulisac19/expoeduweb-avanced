<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class tipostand extends Model
{
    
	public $table = "tipo_stand";
    

	public $fillable = [
	    "nombre",
		"permisos"
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
