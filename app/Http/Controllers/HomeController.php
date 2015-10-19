<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        return \View::make('home');   
    }

    public function allJson()
	{
	$all = \App\Models\stand::all();
	$cad = "";
	$json = array();
	$i = 0;
	 	foreach ($all as $value)
	 	{
	 		//------------------------------------------------------------------
	 		// averiguar posisicon stand
	 		$tipo = \App\Models\tipo_stand::find($value->tipo_stand_id);
			$vector = explode(' ', $tipo->nombre);

			$numero = $vector[1];
			$letra = substr($tipo->nombre,0,1);
			$pos = $value->tipo_stand_id;
			$like = $letra.'-'.$numero.'-'.$pos;
			
			$posicion = \App\Models\posiciones::where(['stand'=>$like])->get();
		
			$pos = \App\Models\posiciones::find($posicion[0]->id);
	 		//------------------------------------------------------------------
	 		// averiguar partes del stand
		 		$partes = \App\Models\parte_stand::where(['stand_id'=>$value->id])->get();

		 		$part = array();
		 		foreach ($partes as $parte) 
		 		{
		 			$parte_tipo = \App\Models\parte_tipo::find($parte->parte_tipo_id);
		 			$bool = $parte_tipo->clickeable == 1 ? 'true' : 'false';
		 			array_push($part, 	[
		 									//	'clickeable' => $bool,
		 									'id'=>$parte->id,
		 									'enlace' => $parte->enlace,
		 								]);
		 		}

	 		//------------------------------------------------------------------
			$json[$i] = [
							'id'=> $value->id,
							'tipo_stand_id'	=> $value->tipo_stand_id,
							'imagen'=> $value->imagen,
							'id_expositor' => $value->user_id,
							'posicion'=> 	[
												'x' =>$pos->posx,
												'y' =>$pos->posy,
												'z' =>$pos->posz,
											],
							'rotacion'=> 	[
												'x' =>$pos->rotx,
												'y' =>$pos->roty,
												'z' =>$pos->rotz,
											],
							'partes'=>  $part,
						]; 
	 	$i++;
	 	}
	return json_encode($json);
	}

	public function allJson2()
	{
		$tipo_stand = \App\Models\tipo_stand::all();
		$json = array();
		$i = 0;

		foreach ($tipo_stand as $item) 
		{
			$partes = \App\Models\parte_tipo::where(['tipo_stand_id'=>$item->id])->get();	
			$dimen = array();
			foreach ($partes as $parte)
			{
				$dimension = \App\Models\dimension_parte::find($parte->dimension_parte_id);
				$bool = $parte->clickeable == 1 ? 'true' : 'false';
				array_push($dimen,
							[ 
								'id'=>$parte->id,
								'nombre'=>$parte->nombre,
								'clickeable'=>$bool,
								'x'=> $dimension->x,		
								'y'=> $dimension->y,		
								'ancho'=> $dimension->ancho,		
								'alto'=> $dimension->alto,		
								'orientacion'=> $dimension->orientacion,		
							]);
			}
			$json[$i] = [
							'nombre'=> $item->nombre,
							'oclusion'=>$item->oclusion,
							'malla'=>$item->malla,
							'imagen_base'=>$item->imagen_base,
							'partes' => $dimen,
						];
		$i++;
		}
		return json_encode($json)	;
		/*$parte_tipos = \App\Models\parte_tipo::all();

		
		$json = array();
		$i = 0;
		foreach ($parte_tipos as $parte_tipo) 
		{
		$dimension_parte = \App\Models\dimension_parte::find($parte_tipo->dimension_parte_id);

			$json[$i] = [
							'nombre'=>$parte_tipo->nombre,
							'clickeable'=>$parte_tipo->clickeable,
							'tipo_stand_id'=>$parte_tipo->tipo_stand_id,
							'dimension'=> 
								[
									'x'=>$dimension_parte->x,
									'y'=>$dimension_parte->y,
									'ancho'=>$dimension_parte->ancho,
									'alto'=>$dimension_parte->alto,
									'orientacion'=>$dimension_parte->orientacion
								],
						];
		$i++;
		}
	return json_encode($json);*/
	}
}
