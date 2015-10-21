<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class posicion_avatar extends Model
{
    
	public $table = "posicion_avatar";
    

	public $fillable = [
	    "x",
		"y",
		"z",
		"rot",
		"action",
		"user_id",
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
   
    ];

	public static $rules = [
	    
	];

}
