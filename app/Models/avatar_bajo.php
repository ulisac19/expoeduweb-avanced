<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class avatar_bajo extends Model
{
    
	public $table = "avatar_bajo";
    

	public $fillable = [
	    "nombre",
		"descripcion",
		"color_id"
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
		"descripcion" => "required",
		"color_id" => "required"
	];

}
