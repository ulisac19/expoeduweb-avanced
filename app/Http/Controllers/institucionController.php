<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateinstitucionRequest;
use App\Http\Requests\UpdateinstitucionRequest;
use App\Libraries\Repositories\institucionRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class institucionController extends AppBaseController
{

	/** @var  institucionRepository */
	private $institucionRepository;

	function __construct(institucionRepository $institucionRepo)
	{
		$this->institucionRepository = $institucionRepo;
	}

	/**
	 * Display a listing of the institucion.
	 *
	 * @return Response
	 */
	public function index()
	{
		$institucions = $this->institucionRepository->paginate(10);

		return view('institucions.index')
			->with('institucions', $institucions);
	}

	/**
	 * Show the form for creating a new institucion.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('institucions.create');
	}

	/**
	 * Store a newly created institucion in storage.
	 *
	 * @param CreateinstitucionRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateinstitucionRequest $request)
	{
		$input = $request->all();

		$institucion = $this->institucionRepository->create($input);

		Flash::success('institucion saved successfully.');

		return redirect(route('institucions.index'));
	}

	/**
	 * Display the specified institucion.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$institucion = $this->institucionRepository->find($id);

		if(empty($institucion))
		{
			Flash::error('institucion not found');

			return redirect(route('institucions.index'));
		}

		return view('institucions.show')->with('institucion', $institucion);
	}

	/**
	 * Show the form for editing the specified institucion.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$institucion = $this->institucionRepository->find($id);

		if(empty($institucion))
		{
			Flash::error('institucion not found');

			return redirect(route('institucions.index'));
		}

		return view('institucions.edit')->with('institucion', $institucion);
	}

	/**
	 * Update the specified institucion in storage.
	 *
	 * @param  int              $id
	 * @param UpdateinstitucionRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateinstitucionRequest $request)
	{
		$institucion = $this->institucionRepository->find($id);

		if(empty($institucion))
		{
			Flash::error('institucion not found');

			return redirect(route('institucions.index'));
		}

		$institucion = $this->institucionRepository->updateRich($request->all(), $id);

		Flash::success('institucion updated successfully.');

		return redirect(route('institucions.index'));
	}

	/**
	 * Remove the specified institucion from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$institucion = $this->institucionRepository->find($id);

		if(empty($institucion))
		{
			Flash::error('institucion not found');

			return redirect(route('institucions.index'));
		}

		$this->institucionRepository->delete($id);

		Flash::success('institucion deleted successfully.');

		return redirect(route('institucions.index'));
	}
}
