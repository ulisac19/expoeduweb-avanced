<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class avatar_medio extends Model
{
    
	public $table = "avatar_medio";
    

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
		"color_id" => "required"
	];

}
