<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class parte_stand extends Model
{
    
	public $table = "parte_stand";
    

	public $fillable = [
	    "enlace",
		"imagen",
		"color",
		"parte_tipo_id",
		"stand_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "enlace" => "required",
		"imagen" => "required",
		"color" => "required",
		"parte_tipo_id" => "required",
		"stand_id" => "required"
	];

}
