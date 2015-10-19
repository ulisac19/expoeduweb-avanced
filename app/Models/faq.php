<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class faq extends Model
{
    
	public $table = "faq";
    

	public $fillable = [
	    "titulo",
		"msj",
		"usuario_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "titulo" => "required",
		"msj" => "required",
		
	];

}
