<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class carrera extends Model
{
    
	public $table = "carrera";
    

	public $fillable = [
	    "nombre",
		"descripcion"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "nombre" => "string",
		"descripcion" => "string"
    ];

	public static $rules = [
	    "nombre" => "required",
		"descripcion" => "required"
	];

	public function post()
    {
        return $this->belongsTo('App\Models\institucion');
    }
}
