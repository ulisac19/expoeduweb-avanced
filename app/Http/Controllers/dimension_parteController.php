<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createdimension_parteRequest;
use App\Http\Requests\Updatedimension_parteRequest;
use App\Libraries\Repositories\dimension_parteRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class dimension_parteController extends AppBaseController
{

	/** @var  dimension_parteRepository */
	private $dimensionParteRepository;

	function __construct(dimension_parteRepository $dimensionParteRepo)
	{
		$this->dimensionParteRepository = $dimensionParteRepo;
	}

	/**
	 * Display a listing of the dimension_parte.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dimensionPartes = $this->dimensionParteRepository->paginate(10);

		return view('dimensionPartes.index')
			->with('dimensionPartes', $dimensionPartes);
	}

	/**
	 * Show the form for creating a new dimension_parte.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('dimensionPartes.create');
	}

	/**
	 * Store a newly created dimension_parte in storage.
	 *
	 * @param Createdimension_parteRequest $request
	 *
	 * @return Response
	 */
	public function store(Createdimension_parteRequest $request)
	{
		$input = $request->all();

		$dimensionParte = $this->dimensionParteRepository->create($input);

		Flash::success('dimension_parte saved successfully.');

		return redirect(route('dimensionPartes.index'));
	}

	/**
	 * Display the specified dimension_parte.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$dimensionParte = $this->dimensionParteRepository->find($id);

		if(empty($dimensionParte))
		{
			Flash::error('dimension_parte not found');

			return redirect(route('dimensionPartes.index'));
		}

		return view('dimensionPartes.show')->with('dimensionParte', $dimensionParte);
	}

	/**
	 * Show the form for editing the specified dimension_parte.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$dimensionParte = $this->dimensionParteRepository->find($id);

		if(empty($dimensionParte))
		{
			Flash::error('dimension_parte not found');

			return redirect(route('dimensionPartes.index'));
		}

		return view('dimensionPartes.edit')->with('dimensionParte', $dimensionParte);
	}

	/**
	 * Update the specified dimension_parte in storage.
	 *
	 * @param  int              $id
	 * @param Updatedimension_parteRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updatedimension_parteRequest $request)
	{
		$dimensionParte = $this->dimensionParteRepository->find($id);

		if(empty($dimensionParte))
		{
			Flash::error('dimension_parte not found');

			return redirect(route('dimensionPartes.index'));
		}

		$dimensionParte = $this->dimensionParteRepository->updateRich($request->all(), $id);

		Flash::success('dimension_parte updated successfully.');

		return redirect(route('dimensionPartes.index'));
	}

	/**
	 * Remove the specified dimension_parte from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$dimensionParte = $this->dimensionParteRepository->find($id);

		if(empty($dimensionParte))
		{
			Flash::error('dimension_parte not found');

			return redirect(route('dimensionPartes.index'));
		}

		$this->dimensionParteRepository->delete($id);

		Flash::success('dimension_parte deleted successfully.');

		return redirect(route('dimensionPartes.index'));
	}
}
