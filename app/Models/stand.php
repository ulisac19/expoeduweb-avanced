<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class stand extends Model
{
    
	public $table = "stand";
    

	public $fillable = [
		'id',
	    "imagen",
		"tipo_stand_id",
		"posicion_stand_id",
		"nombre",
		"user_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

	public static $rules = [
	    "tipo_stand_id" => "required"
	];

	public function tipo()
    {
        return $this->belongsTo('App\Models\tipo_stand');
    }
}
