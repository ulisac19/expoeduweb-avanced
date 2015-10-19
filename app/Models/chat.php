<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class chat extends Model
{
    
	public $table = "chat";
    

	public $fillable = [
	
	    "user_id1",
		"user_id2",
		"enviado",
		"visto",
		"msj",
		"estado"
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
