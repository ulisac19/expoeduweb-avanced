<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class publicidad extends Model
{
    
	public $table = "publicidad";
    

	public $fillable = [
	    "nombre",
		"obj",
		"imagen",
		"oclusion",
		"url"
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
		"obj" => "required",
		"imagen" => "required",
		"oclusion" => "required",
		"url" => "required"
	];

}
