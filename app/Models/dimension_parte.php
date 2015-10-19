<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class dimension_parte extends Model
{
    
	public $table = "dimension_parte";
    

	public $fillable = [
	    "x",
		"y",
		"ancho",
		"largo",
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
	    "x" => "required",
		"y" => "required",
		"ancho" => "required",
		"largo" => "required"
	];

}
