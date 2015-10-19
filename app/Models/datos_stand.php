<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class datos_stand extends Model
{
    
	public $table = "datos_tand";
    

	public $fillable = [
		"pendon1",
		"pendon2",
		"pendon3",
		"pendon3",
		"pendon4",
		"pendon5",
		"imagen_mesa",
		"color_mesa",
		"color_mural",
		"stan_id"
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
