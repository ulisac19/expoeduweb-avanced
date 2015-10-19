<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class posiciones extends Model
{
    
	public $table = "posiciones";
    

	public $fillable = [
	    "stand",
		"posx",
		"posy",
		"posz",
		"rotx",
		"roty",
		"rotz"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "posx" => "double",
		"posy" => "double",
		"posz" => "double",
		"rotx" => "double",
		"roty" => "double",
		"rotz" => "double"
    ];

	public static $rules = [
	    
	];

}
