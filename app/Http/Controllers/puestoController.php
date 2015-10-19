<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatepuestoRequest;
use App\Http\Requests\UpdatepuestoRequest;
use App\Libraries\Repositories\puestoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class puestoController extends AppBaseController
{

	/** @var  puestoRepository */
	private $puestoRepository;

	function __construct(puestoRepository $puestoRepo)
	{
		$this->puestoRepository = $puestoRepo;
	}

	/**
	 * Display a listing of the puesto.
	 *
	 * @return Response
	 */
	public function index()
	{
		$puestos = $this->puestoRepository->paginate(10);

		return view('puestos.index')
			->with('puestos', $puestos);
	}

	/**
	 * Show the form for creating a new puesto.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('puestos.create');
	}

	/**
	 * Store a newly created puesto in storage.
	 *
	 * @param CreatepuestoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatepuestoRequest $request)
	{
		$input = $request->all();

		$puesto = $this->puestoRepository->create($input);

		Flash::success('puesto saved successfully.');

		return redirect(route('puestos.index'));
	}

	/**
	 * Display the specified puesto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$puesto = $this->puestoRepository->find($id);

		if(empty($puesto))
		{
			Flash::error('puesto not found');

			return redirect(route('puestos.index'));
		}

		return view('puestos.show')->with('puesto', $puesto);
	}

	/**
	 * Show the form for editing the specified puesto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$puesto = $this->puestoRepository->find($id);

		if(empty($puesto))
		{
			Flash::error('puesto not found');

			return redirect(route('puestos.index'));
		}

		return view('puestos.edit')->with('puesto', $puesto);
	}

	/**
	 * Update the specified puesto in storage.
	 *
	 * @param  int              $id
	 * @param UpdatepuestoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatepuestoRequest $request)
	{
		$puesto = $this->puestoRepository->find($id);

		if(empty($puesto))
		{
			Flash::error('puesto not found');

			return redirect(route('puestos.index'));
		}

		$puesto = $this->puestoRepository->updateRich($request->all(), $id);

		Flash::success('puesto updated successfully.');

		return redirect(route('puestos.index'));
	}

	/**
	 * Remove the specified puesto from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$puesto = $this->puestoRepository->find($id);

		if(empty($puesto))
		{
			Flash::error('puesto not found');

			return redirect(route('puestos.index'));
		}

		$this->puestoRepository->delete($id);

		Flash::success('puesto deleted successfully.');

		return redirect(route('puestos.index'));
	}
}
