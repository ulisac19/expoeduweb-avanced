<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatecarreraRequest;
use App\Http\Requests\UpdatecarreraRequest;
use App\Libraries\Repositories\carreraRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class carreraController extends AppBaseController
{

	/** @var  carreraRepository */
	private $carreraRepository;

	function __construct(carreraRepository $carreraRepo)
	{
		$this->carreraRepository = $carreraRepo;
	}

	/**
	 * Display a listing of the carrera.
	 *
	 * @return Response
	 */
	public function index()
	{
		$carreras = $this->carreraRepository->paginate(10);

		return view('carreras.index')
			->with('carreras', $carreras);
	}

	/**
	 * Show the form for creating a new carrera.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('carreras.create');
	}

	/**
	 * Store a newly created carrera in storage.
	 *
	 * @param CreatecarreraRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatecarreraRequest $request)
	{
		$input = $request->all();

		$carrera = $this->carreraRepository->create($input);

		Flash::success('carrera saved successfully.');

		return redirect(route('carreras.index'));
	}

	/**
	 * Display the specified carrera.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$carrera = $this->carreraRepository->find($id);

		if(empty($carrera))
		{
			Flash::error('carrera not found');

			return redirect(route('carreras.index'));
		}

		return view('carreras.show')->with('carrera', $carrera);
	}

	/**
	 * Show the form for editing the specified carrera.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$carrera = $this->carreraRepository->find($id);

		if(empty($carrera))
		{
			Flash::error('carrera not found');

			return redirect(route('carreras.index'));
		}

		return view('carreras.edit')->with('carrera', $carrera);
	}

	/**
	 * Update the specified carrera in storage.
	 *
	 * @param  int              $id
	 * @param UpdatecarreraRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatecarreraRequest $request)
	{
		$carrera = $this->carreraRepository->find($id);

		if(empty($carrera))
		{
			Flash::error('carrera not found');

			return redirect(route('carreras.index'));
		}

		$carrera = $this->carreraRepository->updateRich($request->all(), $id);

		Flash::success('carrera updated successfully.');

		return redirect(route('carreras.index'));
	}

	/**
	 * Remove the specified carrera from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$carrera = $this->carreraRepository->find($id);

		if(empty($carrera))
		{
			Flash::error('carrera not found');

			return redirect(route('carreras.index'));
		}

		$this->carreraRepository->delete($id);

		Flash::success('carrera deleted successfully.');

		return redirect(route('carreras.index'));
	}
}
