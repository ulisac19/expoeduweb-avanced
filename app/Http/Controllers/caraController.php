<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatecaraRequest;
use App\Http\Requests\UpdatecaraRequest;
use App\Libraries\Repositories\caraRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class caraController extends AppBaseController
{

	/** @var  caraRepository */
	private $caraRepository;

	function __construct(caraRepository $caraRepo)
	{
		$this->caraRepository = $caraRepo;
	}

	/**
	 * Display a listing of the cara.
	 *
	 * @return Response
	 */
	public function index()
	{
		$caras = $this->caraRepository->paginate(10);

		return view('caras.index')
			->with('caras', $caras);
	}

	/**
	 * Show the form for creating a new cara.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('caras.create');
	}

	/**
	 * Store a newly created cara in storage.
	 *
	 * @param CreatecaraRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatecaraRequest $request)
	{
		$input = $request->all();

		$cara = $this->caraRepository->create($input);

		Flash::success('cara saved successfully.');

		return redirect(route('caras.index'));
	}

	/**
	 * Display the specified cara.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$cara = $this->caraRepository->find($id);

		if(empty($cara))
		{
			Flash::error('cara not found');

			return redirect(route('caras.index'));
		}

		return view('caras.show')->with('cara', $cara);
	}

	/**
	 * Show the form for editing the specified cara.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$cara = $this->caraRepository->find($id);

		if(empty($cara))
		{
			Flash::error('cara not found');

			return redirect(route('caras.index'));
		}

		return view('caras.edit')->with('cara', $cara);
	}

	/**
	 * Update the specified cara in storage.
	 *
	 * @param  int              $id
	 * @param UpdatecaraRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatecaraRequest $request)
	{
		$cara = $this->caraRepository->find($id);

		if(empty($cara))
		{
			Flash::error('cara not found');

			return redirect(route('caras.index'));
		}

		$cara = $this->caraRepository->updateRich($request->all(), $id);

		Flash::success('cara updated successfully.');

		return redirect(route('caras.index'));
	}

	/**
	 * Remove the specified cara from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$cara = $this->caraRepository->find($id);

		if(empty($cara))
		{
			Flash::error('cara not found');

			return redirect(route('caras.index'));
		}

		$this->caraRepository->delete($id);

		Flash::success('cara deleted successfully.');

		return redirect(route('caras.index'));
	}
}
