<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatedatosRequest;
use App\Http\Requests\UpdatedatosRequest;
use App\Libraries\Repositories\datosRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class datosController extends AppBaseController
{

	/** @var  datosRepository */
	private $datosRepository;

	function __construct(datosRepository $datosRepo)
	{
		$this->datosRepository = $datosRepo;
	}

	/**
	 * Display a listing of the datos.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = $this->datosRepository->paginate(10);

		return view('datos.index')
			->with('datos', $datos);
	}

	/**
	 * Show the form for creating a new datos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('datos.create');
	}

	/**
	 * Store a newly created datos in storage.
	 *
	 * @param CreatedatosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatedatosRequest $request)
	{
		$input = $request->all();

		$datos = $this->datosRepository->create($input);

		Flash::success('datos saved successfully.');

		return redirect(route('datos.index'));
	}

	/**
	 * Display the specified datos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$datos = $this->datosRepository->find($id);

		if(empty($datos))
		{
			Flash::error('datos not found');

			return redirect(route('datos.index'));
		}

		return view('datos.show')->with('datos', $datos);
	}

	/**
	 * Show the form for editing the specified datos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$datos = $this->datosRepository->find($id);

		if(empty($datos))
		{
			Flash::error('datos not found');

			return redirect(route('datos.index'));
		}

		return view('datos.edit')->with('datos', $datos);
	}

	public function edit2($id)
	{
		return view('datos.fields2');
	}

	public function edit3($id)
	{
		return view('datos.fields3');
	}

	public function edit4($id)
	{
		return view('datos.fields4');
	}

	public function edit5($id)
	{
		return view('datos.fields5');
	}

	public function edit6($id)
	{
		return view('datos.fields6');
	}

	/**
	 * Update the specified datos in storage.
	 *
	 * @param  int              $id
	 * @param UpdatedatosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatedatosRequest $request)
	{
		$datos = $this->datosRepository->find($id);

		if(empty($datos))
		{
			Flash::error('datos not found');

			return redirect(route('datos.index'));
		}

		$datos = $this->datosRepository->updateRich($request->all(), $id);

		Flash::success('datos updated successfully.');

		//return redirect(route('datos.index'));
		return redirect(route('home'));
	}

	/**
	 * Remove the specified datos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$datos = $this->datosRepository->find($id);

		if(empty($datos))
		{
			Flash::error('datos not found');

			return redirect(route('datos.index'));
		}

		$this->datosRepository->delete($id);

		Flash::success('datos deleted successfully.');

		return redirect(route('datos.index'));
	}
}
