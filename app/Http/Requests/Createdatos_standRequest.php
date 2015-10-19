<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\datos_stand;

class Createdatos_standRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return datos_stand::$rules;
	}

}
