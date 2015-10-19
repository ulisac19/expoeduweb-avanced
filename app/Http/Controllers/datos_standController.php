<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createdatos_standRequest;
use App\Http\Requests\Updatedatos_standRequest;
use App\Libraries\Repositories\datos_standRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class datos_standController extends AppBaseController
{

	/** @var  datos_standRepository */
	private $datosStandRepository;

	function __construct(datos_standRepository $datosStandRepo)
	{
		$this->datosStandRepository = $datosStandRepo;
	}

	/**
	 * Display a listing of the datos_stand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datosStands = $this->datosStandRepository->paginate(10);

		return view('datosStands.index')
			->with('datosStands', $datosStands);
	}

	/**
	 * Show the form for creating a new datos_stand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('datosStands.create');
	}

	/**
	 * Store a newly created datos_stand in storage.
	 *
	 * @param Createdatos_standRequest $request
	 *
	 * @return Response
	 */
	public function store(Createdatos_standRequest $request)
	{
		echo "<pre>";
		print_r($request->all());
		echo "</pre>";

		File::makeDirectory('/vendor/isaac');
		/*$input = $request->all();

		$datosStand = $this->datosStandRepository->create($input);

		Flash::success('datos_stand saved successfully.');

		return redirect(route('datosStands.index'));*/
	}

	/**
	 * Display the specified datos_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$datosStand = $this->datosStandRepository->find($id);

		if(empty($datosStand))
		{
			Flash::error('datos_stand not found');

			return redirect(route('datosStands.index'));
		}

		return view('datosStands.show')->with('datosStand', $datosStand);
	}

	/**
	 * Show the form for editing the specified datos_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$datosStand = $this->datosStandRepository->find($id);

		if(empty($datosStand))
		{
			Flash::error('datos_stand not found');

			return redirect(route('datosStands.index'));
		}

		return view('datosStands.edit')->with('datosStand', $datosStand);
	}

	/**
	 * Update the specified datos_stand in storage.
	 *
	 * @param int              $id
	 * @param Updatedatos_standRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updatedatos_standRequest $request)
	{
		$datosStand = $this->datosStandRepository->find($id);

		if(empty($datosStand))
		{
			Flash::error('datos_stand not found');

			return redirect(route('datosStands.index'));
		}

		$datosStand = $this->datosStandRepository->updateRich($request->all(), $id);

		Flash::success('datos_stand updated successfully.');

		return redirect(route('datosStands.index'));
	}

	/**
	 * Remove the specified datos_stand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$datosStand = $this->datosStandRepository->find($id);

		if(empty($datosStand))
		{
			Flash::error('datos_stand not found');

			return redirect(route('datosStands.index'));
		}

		$this->datosStandRepository->delete($id);

		Flash::success('datos_stand deleted successfully.');

		return redirect(route('datosStands.index'));
	}
}
