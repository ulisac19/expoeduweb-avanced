<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class sucursal extends Model
{
    
	public $table = "sucursal";
    

	public $fillable = [
	    "institucion_id",
		"lat",
		"lng"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "institucion_id" => "required",
		"lat" => "required",
		"lng" => "required"
	];

}
