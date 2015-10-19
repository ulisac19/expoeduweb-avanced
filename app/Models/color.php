<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class color extends Model
{
    
	public $table = "color";
    

	public $fillable = [
	    "nombre",
		"codigo",
		"rgb"
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
		"codigo" => "required",
		"rgb" => "required"
	];

}
