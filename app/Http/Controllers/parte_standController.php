<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createparte_standRequest;
use App\Http\Requests\Updateparte_standRequest;
use App\Libraries\Repositories\parte_standRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class parte_standController extends AppBaseController
{

	/** @var  parte_standRepository */
	private $parteStandRepository;

	function __construct(parte_standRepository $parteStandRepo)
	{
		$this->parteStandRepository = $parteStandRepo;
	}

	/**
	 * Display a listing of the parte_stand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$parteStands = $this->parteStandRepository->paginate(10);

		return view('parteStands.index')
			->with('parteStands', $parteStands);
	}

	/**
	 * Show the form for creating a new parte_stand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('parteStands.create');
	}

	/**
	 * Store a newly created parte_stand in storage.
	 *
	 * @param Createparte_standRequest $request
	 *
	 * @return Response
	 */
	public function store(Createparte_standRequest $request)
	{
		$input = $request->all();

		$parteStand = $this->parteStandRepository->create($input);

		Flash::success('parte_stand saved successfully.');

		return redirect(route('parteStands.index'));
	}

	/**
	 * Display the specified parte_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$parteStand = $this->parteStandRepository->find($id);

		if(empty($parteStand))
		{
			Flash::error('parte_stand not found');

			return redirect(route('parteStands.index'));
		}

		return view('parteStands.show')->with('parteStand', $parteStand);
	}

	/**
	 * Show the form for editing the specified parte_stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$parteStand = $this->parteStandRepository->find($id);

		if(empty($parteStand))
		{
			Flash::error('parte_stand not found');

			return redirect(route('parteStands.index'));
		}

		return view('parteStands.edit')->with('parteStand', $parteStand);
	}

	/**
	 * Update the specified parte_stand in storage.
	 *
	 * @param  int              $id
	 * @param Updateparte_standRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateparte_standRequest $request)
	{
		$parteStand = $this->parteStandRepository->find($id);

		if(empty($parteStand))
		{
			Flash::error('parte_stand not found');

			return redirect(route('parteStands.index'));
		}

		$parteStand = $this->parteStandRepository->updateRich($request->all(), $id);

		Flash::success('parte_stand updated successfully.');

		return redirect(route('parteStands.index'));
	}

	/**
	 * Remove the specified parte_stand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$parteStand = $this->parteStandRepository->find($id);

		if(empty($parteStand))
		{
			Flash::error('parte_stand not found');

			return redirect(route('parteStands.index'));
		}

		$this->parteStandRepository->delete($id);

		Flash::success('parte_stand deleted successfully.');

		return redirect(route('parteStands.index'));
	}
}
