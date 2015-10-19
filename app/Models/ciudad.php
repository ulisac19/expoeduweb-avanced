<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class ciudad extends Model
{
    
	public $table = "ciudad";
    

	public $fillable = [
	    "nombre",
		"estado_id"
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
		"estado_id" => "required"
	];

}
