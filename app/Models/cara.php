<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class cara extends Model
{
    
	public $table = "cara";
    

	public $fillable = [
	    "numero",
		"parte_tipo_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "numero" => "number",
		"parte_tipo_id" => "required"
	];

}
