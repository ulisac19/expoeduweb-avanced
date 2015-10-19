<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class estado extends Model
{
    
	public $table = "estado";
    

	public $fillable = [
	    "nombre",
	    "id_pais"
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
