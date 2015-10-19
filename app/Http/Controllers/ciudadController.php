<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateciudadRequest;
use App\Http\Requests\UpdateciudadRequest;
use App\Libraries\Repositories\ciudadRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class ciudadController extends AppBaseController
{

	/** @var  ciudadRepository */
	private $ciudadRepository;

	function __construct(ciudadRepository $ciudadRepo)
	{
		$this->ciudadRepository = $ciudadRepo;
	}

	/**
	 * Display a listing of the ciudad.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ciudads = $this->ciudadRepository->paginate(10);

		return view('ciudads.index')
			->with('ciudads', $ciudads);
	}

	/**
	 * Show the form for creating a new ciudad.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ciudads.create');
	}

	/**
	 * Store a newly created ciudad in storage.
	 *
	 * @param CreateciudadRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateciudadRequest $request)
	{
		$input = $request->all();

		$ciudad = $this->ciudadRepository->create($input);

		Flash::success('ciudad saved successfully.');

		return redirect(route('ciudads.index'));
	}

	/**
	 * Display the specified ciudad.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$ciudad = $this->ciudadRepository->find($id);

		if(empty($ciudad))
		{
			Flash::error('ciudad not found');

			return redirect(route('ciudads.index'));
		}

		return view('ciudads.show')->with('ciudad', $ciudad);
	}

	/**
	 * Show the form for editing the specified ciudad.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$ciudad = $this->ciudadRepository->find($id);

		if(empty($ciudad))
		{
			Flash::error('ciudad not found');

			return redirect(route('ciudads.index'));
		}

		return view('ciudads.edit')->with('ciudad', $ciudad);
	}

	/**
	 * Update the specified ciudad in storage.
	 *
	 * @param  int              $id
	 * @param UpdateciudadRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateciudadRequest $request)
	{
		$ciudad = $this->ciudadRepository->find($id);

		if(empty($ciudad))
		{
			Flash::error('ciudad not found');

			return redirect(route('ciudads.index'));
		}

		$ciudad = $this->ciudadRepository->updateRich($request->all(), $id);

		Flash::success('ciudad updated successfully.');

		return redirect(route('ciudads.index'));
	}

	/**
	 * Remove the specified ciudad from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$ciudad = $this->ciudadRepository->find($id);

		if(empty($ciudad))
		{
			Flash::error('ciudad not found');

			return redirect(route('ciudads.index'));
		}

		$this->ciudadRepository->delete($id);

		Flash::success('ciudad deleted successfully.');

		return redirect(route('ciudads.index'));
	}
	public function ciudadesestado($id)
	{	
		$cursor = \App\Models\ciudad::where('estado_id', '=', $_GET['id'])->get(); 
		$cad = "";
		foreach ($cursor as $ciudad)
		{
			$cad = $cad.'<option value="'.$ciudad->id.'" >'.$ciudad->nombre.'</option>';	
		}
		return $cad;
	}
}
