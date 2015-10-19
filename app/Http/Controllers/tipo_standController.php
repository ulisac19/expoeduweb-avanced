<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createtipo_standRequest;
use App\Http\Requests\Updatetipo_standRequest;
use App\Libraries\Repositories\tipo_standRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use Storage;
use DB;

class tipo_standController extends AppBaseController
{

	/** @var  tipo_standRepository */
	private $tipoStandRepository;

	function __construct(tipo_standRepository $tipoStandRepo)
	{
		$this->tipoStandRepository = $tipoStandRepo;
	}

	/**
	 * Display a listing of the tipo_stand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipoStands = $this->tipoStandRepository->paginate(10);

		return view('tipoStands.index')
			->with('tipoStands', $tipoStands);
	}

	/**
	 * Show the form for creating a new tipo_stand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipoStands.create');
	}

	/**
	 * Store a newly created tipo_stand in storage.
	 *
	 * @param Createtipo_standRequest $request
	 *
	 * @return Response
	 */
	public function store(Createtipo_standRequest $request)
	{
		$fields = $request->all();

		$dst_oclusion = "tipo/".trim($fields['nombre'])."/oclusion/";
		$dst_imagen_base = "tipo/".trim($fields['nombre'])."/imagen_base/";
		$dst_obj = "tipo/".trim($fields['nombre'])."/obj/";
		$dst_plano = "tipo/".trim($fields['nombre'])."/plano/";

		Storage::makeDirectory($dst_oclusion);
		Storage::makeDirectory($dst_imagen_base);
		Storage::makeDirectory($dst_obj);
		Storage::makeDirectory($dst_plano);

		$fields['oclusion']->move('../storage/app/'.$dst_oclusion, $fields['oclusion']->getClientOriginalName());
		$fields['imagen_base']->move('../storage/app/'.$dst_imagen_base, $fields['imagen_base']->getClientOriginalName());
		$fields['obj']->move('../storage/app/'.$dst_obj, $fields['obj']->getClientOriginalName());
		$fields['plano']->move('../storage/app/'.$dst_plano, $fields['plano']->getClientOriginalName());

		$model = new \App\Models\tipo_stand;
		$model->nombre = $fields['nombre'];
		$model->oclusion = $fields['oclusion']->getClientOriginalName();
		$model->imagen_base = $fields['imagen_base']->getClientOriginalName();
		$model->obj = $fields['obj']->getClientOriginalName();
		$model->plano = $fields['plano']->getClientOriginalName();
		$model->ancho = $fields['anchot'];
		$model->largo = $fields['largot'];
		$model->save();
		$id = $model->id;

		$i = 0;
		foreach ($fields["imagen"] as $key) 
		{
			$dimension = new \App\Models\dimension_parte;
			$dimension->ancho = $fields["ancho"][$i];
			$dimension->x = $fields["x"][$i];
			$dimension->y = $fields["y"][$i];
			$dimension->largo = $fields["largo"][$i];
			$dimension->save();
			

			$tipoparte = new \App\Models\parte_tipo;
			$tipoparte->nombre = $fields["tipo"][$i];
			$tipoparte->clickeable = $fields["click"][$i];
			$tipoparte->tipo = $fields["tipo"][$i];
			$tipoparte->tipo_stand_id = $id;
			$tipoparte->dimension_parte_id = $dimension->id;	
			$tipoparte->save();

			$i++;
		}

		Flash::success('tipo de stand ha sido creado');

		return redirect(route('tipoStands.index'));
	}

	/**
	 * Display the specified tipo_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tipoStand = $this->tipoStandRepository->find($id);

		if(empty($tipoStand))
		{
			Flash::error('tipo_stand not found');

			return redirect(route('tipoStands.index'));
		}

		return view('tipoStands.show')->with('tipoStand', $tipoStand);
	}

	/**
	 * Show the form for editing the specified tipo_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$tipoStand = $this->tipoStandRepository->find($id);

		if(empty($tipoStand))
		{
			Flash::error('tipo_stand not found');

			return redirect(route('tipoStands.index'));
		}

		return view('tipoStands.edit')->with('tipoStand', $tipoStand);
	}

	/**
	 * Update the specified tipo_stand in storage.
	 *
	 * @param  int              $id
	 * @param Updatetipo_standRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updatetipo_standRequest $request)
	{
		$tipoStand = $this->tipoStandRepository->find($id);

		if(empty($tipoStand))
		{
			Flash::error('tipo_stand not found');

			return redirect(route('tipoStands.index'));
		}

		$tipoStand = $this->tipoStandRepository->updateRich($request->all(), $id);

		Flash::success('tipo_stand updated successfully.');

		return redirect(route('tipoStands.index'));
	}

	/**
	 * Remove the specified tipo_stand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$tipoStand = $this->tipoStandRepository->find($id);

		if(empty($tipoStand))
		{
			Flash::error('tipo_stand not found');

			return redirect(route('tipoStands.index'));
		}

		$this->tipoStandRepository->delete($id);

		Flash::success('tipo_stand deleted successfully.');

		return redirect(route('tipoStands.index'));
	}

	public function select($id)
	{
		$tipo = \App\Models\tipo_stand::find($_GET['id']);
		$vector = explode(' ', $tipo->nombre);

		$numero = $vector[1];
		$letra = substr($tipo->nombre,0,1);
		$like = $letra.'-'.$numero.'%';
		$posiciones = DB::table('posiciones')->where('stand','like', $like)->where('usado','=', 0)->get();

		$cad = '<select id="posicion_stand_id" name="posicion_stand_id" class="form-control">';
		foreach ($posiciones as $value)
		{
			$vector2 = explode('-', $value->stand);
			$cad = $cad.'<option value="'.$vector2[2].'">'.$vector2[2].'</option>';
		}
		$cad = $cad.'</select>'; 
	return $cad;
	}

	public function selecttipo()
	{
		$tipo = \App\Models\tipo_stand::find($_GET['id']);
		$parte = \App\Models\parte_tipo::where(['tipo_stand_id'=>$tipo->id])->get();
		$cad = '';
		foreach ($parte as $value) 
		{
			$cad = $cad.'<div class="form-group col-sm-6 col-lg-12"> <label for="'.$value->nombre.'">'.$value->nombre.'</label> <input class="file" data-show-upload="false" data-show-caption="true" name="'.$value->nombre.'" type="file" id="'.$value->nombre.'"> </div>';
		}
	return $cad;
	}

}
