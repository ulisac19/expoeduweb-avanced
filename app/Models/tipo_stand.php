<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class tipo_stand extends Model
{
    
	public $table = "tipo_stand";
    

	public $fillable = [
		'id',
	    "nombre",
		"oclusion",
		"imagen_base",
		"obj",
		'plano',
		'ancho',
		'largo',
		"cantidad"
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
		"oclusion" => "required",
		"imagen_base" => "required",
		"obj" => "required",
		'plano' => "required",
		'ancho' => "required",
		'largo' => "required"
	];

	public function stands()
    {
        return $this->hasMany('App\Models\stand', 'tipo_stand_id', 'id');
    }

}
