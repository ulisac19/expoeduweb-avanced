<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateposicionesRequest;
use App\Http\Requests\UpdateposicionesRequest;
use App\Libraries\Repositories\posicionesRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class posicionesController extends AppBaseController
{

	/** @var  posicionesRepository */
	private $posicionesRepository;

	function __construct(posicionesRepository $posicionesRepo)
	{
		$this->posicionesRepository = $posicionesRepo;
	}

	/**
	 * Display a listing of the posiciones.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posiciones = $this->posicionesRepository->paginate(10);

		return view('posiciones.index')
			->with('posiciones', $posiciones);
	}

	/**
	 * Show the form for creating a new posiciones.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posiciones.create');
	}

	/**
	 * Store a newly created posiciones in storage.
	 *
	 * @param CreateposicionesRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateposicionesRequest $request)
	{
		$input = $request->all();

		$posiciones = $this->posicionesRepository->create($input);

		Flash::success('posiciones saved successfully.');

		return redirect(route('posiciones.index'));
	}

	/**
	 * Display the specified posiciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$posiciones = $this->posicionesRepository->find($id);

		if(empty($posiciones))
		{
			Flash::error('posiciones not found');

			return redirect(route('posiciones.index'));
		}

		return view('posiciones.show')->with('posiciones', $posiciones);
	}

	/**
	 * Show the form for editing the specified posiciones.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$posiciones = $this->posicionesRepository->find($id);

		if(empty($posiciones))
		{
			Flash::error('posiciones not found');

			return redirect(route('posiciones.index'));
		}

		return view('posiciones.edit')->with('posiciones', $posiciones);
	}

	/**
	 * Update the specified posiciones in storage.
	 *
	 * @param  int              $id
	 * @param UpdateposicionesRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateposicionesRequest $request)
	{
		$posiciones = $this->posicionesRepository->find($id);

		if(empty($posiciones))
		{
			Flash::error('posiciones not found');

			return redirect(route('posiciones.index'));
		}

		$posiciones = $this->posicionesRepository->updateRich($request->all(), $id);

		Flash::success('posiciones updated successfully.');

		return redirect(route('posiciones.index'));
	}

	/**
	 * Remove the specified posiciones from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$posiciones = $this->posicionesRepository->find($id);

		if(empty($posiciones))
		{
			Flash::error('posiciones not found');

			return redirect(route('posiciones.index'));
		}

		$this->posicionesRepository->delete($id);

		Flash::success('posiciones deleted successfully.');

		return redirect(route('posiciones.index'));
	}
}
