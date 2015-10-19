<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createposicion_standRequest;
use App\Http\Requests\Updateposicion_standRequest;
use App\Libraries\Repositories\posicion_standRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class posicion_standController extends AppBaseController
{

	/** @var  posicion_standRepository */
	private $posicionStandRepository;

	function __construct(posicion_standRepository $posicionStandRepo)
	{
		$this->posicionStandRepository = $posicionStandRepo;
	}

	/**
	 * Display a listing of the posicion_stand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posicionStands = $this->posicionStandRepository->paginate(10);

		return view('posicionStands.index')
			->with('posicionStands', $posicionStands);
	}

	/**
	 * Show the form for creating a new posicion_stand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posicionStands.create');
	}

	/**
	 * Store a newly created posicion_stand in storage.
	 *
	 * @param Createposicion_standRequest $request
	 *
	 * @return Response
	 */
	public function store(Createposicion_standRequest $request)
	{
		$input = $request->all();

		$posicionStand = $this->posicionStandRepository->create($input);

		Flash::success('posicion_stand saved successfully.');

		return redirect(route('posicionStands.index'));
	}

	/**
	 * Display the specified posicion_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$posicionStand = $this->posicionStandRepository->find($id);

		if(empty($posicionStand))
		{
			Flash::error('posicion_stand not found');

			return redirect(route('posicionStands.index'));
		}

		return view('posicionStands.show')->with('posicionStand', $posicionStand);
	}

	/**
	 * Show the form for editing the specified posicion_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$posicionStand = $this->posicionStandRepository->find($id);

		if(empty($posicionStand))
		{
			Flash::error('posicion_stand not found');

			return redirect(route('posicionStands.index'));
		}

		return view('posicionStands.edit')->with('posicionStand', $posicionStand);
	}

	/**
	 * Update the specified posicion_stand in storage.
	 *
	 * @param  int              $id
	 * @param Updateposicion_standRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateposicion_standRequest $request)
	{
		$posicionStand = $this->posicionStandRepository->find($id);

		if(empty($posicionStand))
		{
			Flash::error('posicion_stand not found');

			return redirect(route('posicionStands.index'));
		}

		$posicionStand = $this->posicionStandRepository->updateRich($request->all(), $id);

		Flash::success('posicion_stand updated successfully.');

		return redirect(route('posicionStands.index'));
	}

	/**
	 * Remove the specified posicion_stand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$posicionStand = $this->posicionStandRepository->find($id);

		if(empty($posicionStand))
		{
			Flash::error('posicion_stand not found');

			return redirect(route('posicionStands.index'));
		}

		$this->posicionStandRepository->delete($id);

		Flash::success('posicion_stand deleted successfully.');

		return redirect(route('posicionStands.index'));
	}
}
