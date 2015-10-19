<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class pais extends Model
{
    
	public $table = "pais";
    

	public $fillable = [
	    "nombre"
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
