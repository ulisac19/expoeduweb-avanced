<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createparte_tipoRequest;
use App\Http\Requests\Updateparte_tipoRequest;
use App\Libraries\Repositories\parte_tipoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class parte_tipoController extends AppBaseController
{

	/** @var  parte_tipoRepository */
	private $parteTipoRepository;

	function __construct(parte_tipoRepository $parteTipoRepo)
	{
		$this->parteTipoRepository = $parteTipoRepo;
	}

	/**
	 * Display a listing of the parte_tipo.
	 *
	 * @return Response
	 */
	public function index()
	{
		$parteTipos = $this->parteTipoRepository->paginate(10);

		return view('parteTipos.index')
			->with('parteTipos', $parteTipos);
	}

	/**
	 * Show the form for creating a new parte_tipo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('parteTipos.create');
	}

	/**
	 * Store a newly created parte_tipo in storage.
	 *
	 * @param Createparte_tipoRequest $request
	 *
	 * @return Response
	 */
	public function store(Createparte_tipoRequest $request)
	{
		$input = $request->all();


		$dimensionParte = new \App\Models\dimension_parte;
		$dimensionParte->x = $input['x'];
		$dimensionParte->y = $input['y'];
		$dimensionParte->ancho = $input['ancho'];
		$dimensionParte->alto = $input['alto'];
		$dimensionParte->orientacion = $input['orientacion'];
		$dimensionParte->save();

		$parteTipo = new \App\Models\parte_tipo;
		$parteTipo->nombre = $input['nombre'];
		$parteTipo->clickeable = $input['clickeable'];
		$parteTipo->tipo = $input['tipo'];
		$parteTipo->tipo_stand_id = $input['tipo_stand_id'];
		$parteTipo->dimension_parte_id = $dimensionParte->id;
		$parteTipo->save();
		
		Flash::success('parte_tipo saved successfully.');

		return redirect(route('parteTipos.index'));
	}

	/**
	 * Display the specified parte_tipo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$parteTipo = $this->parteTipoRepository->find($id);

		if(empty($parteTipo))
		{
			Flash::error('parte_tipo not found');

			return redirect(route('parteTipos.index'));
		}

		return view('parteTipos.show')->with('parteTipo', $parteTipo);
	}

	/**
	 * Show the form for editing the specified parte_tipo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$parteTipo = $this->parteTipoRepository->find($id);

		if(empty($parteTipo))
		{
			Flash::error('parte_tipo not found');

			return redirect(route('parteTipos.index'));
		}

		return view('parteTipos.edit')->with('parteTipo', $parteTipo);
	}

	/**
	 * Update the specified parte_tipo in storage.
	 *
	 * @param  int              $id
	 * @param Updateparte_tipoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateparte_tipoRequest $request)
	{
		$parteTipo = $this->parteTipoRepository->find($id);

		if(empty($parteTipo))
		{
			Flash::error('parte_tipo not found');

			return redirect(route('parteTipos.index'));
		}

		$parteTipo = $this->parteTipoRepository->updateRich($request->all(), $id);

		Flash::success('parte_tipo updated successfully.');

		return redirect(route('parteTipos.index'));
	}

	/**
	 * Remove the specified parte_tipo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$parteTipo = $this->parteTipoRepository->find($id);

		if(empty($parteTipo))
		{
			Flash::error('parte_tipo not found');

			return redirect(route('parteTipos.index'));
		}

		$this->parteTipoRepository->delete($id);

		Flash::success('parte_tipo deleted successfully.');

		return redirect(route('parteTipos.index'));
	}
}
