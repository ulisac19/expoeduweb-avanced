<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class avatar extends Model
{
    
	public $table = "avatar";
    

	public $fillable = [
	    "nombre",
		"descripcion",
		"users_id",
		"avatar_alto_id",
		"avatar_bajo_id",
		"avatar_medio_id"
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
		"avatar_alto_id" => "required",
		"avatar_bajo_id" => "required",
		"avatar_medio_id" => "required"
	];

}
