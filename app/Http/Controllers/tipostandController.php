<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatetipostandRequest;
use App\Http\Requests\UpdatetipostandRequest;
use App\Libraries\Repositories\tipostandRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class tipostandController extends AppBaseController
{

	/** @var  tipostandRepository */
	private $tipostandRepository;

	function __construct(tipostandRepository $tipostandRepo)
	{
		$this->tipostandRepository = $tipostandRepo;
	}

	/**
	 * Display a listing of the tipostand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipostands = $this->tipostandRepository->paginate(10);

		return view('tipostands.index')
			->with('tipostands', $tipostands);
	}

	/**
	 * Show the form for creating a new tipostand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tipostands.create');
	}

	/**
	 * Store a newly created tipostand in storage.
	 *
	 * @param CreatetipostandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatetipostandRequest $request)
	{
		$input = $request->all();

		$tipostand = $this->tipostandRepository->create($input);

		Flash::success('tipostand saved successfully.');

		return redirect(route('tipostands.index'));
	}

	/**
	 * Display the specified tipostand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$tipostand = $this->tipostandRepository->find($id);

		if(empty($tipostand))
		{
			Flash::error('tipostand not found');

			return redirect(route('tipostands.index'));
		}

		return view('tipostands.show')->with('tipostand', $tipostand);
	}

	/**
	 * Show the form for editing the specified tipostand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$tipostand = $this->tipostandRepository->find($id);

		if(empty($tipostand))
		{
			Flash::error('tipostand not found');

			return redirect(route('tipostands.index'));
		}

		return view('tipostands.edit')->with('tipostand', $tipostand);
	}

	/**
	 * Update the specified tipostand in storage.
	 *
	 * @param  int              $id
	 * @param UpdatetipostandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatetipostandRequest $request)
	{
		$tipostand = $this->tipostandRepository->find($id);

		if(empty($tipostand))
		{
			Flash::error('tipostand not found');

			return redirect(route('tipostands.index'));
		}

		$tipostand = $this->tipostandRepository->updateRich($request->all(), $id);

		Flash::success('tipostand updated successfully.');

		return redirect(route('tipostands.index'));
	}

	/**
	 * Remove the specified tipostand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$tipostand = $this->tipostandRepository->find($id);

		if(empty($tipostand))
		{
			Flash::error('tipostand not found');

			return redirect(route('tipostands.index'));
		}

		$this->tipostandRepository->delete($id);

		Flash::success('tipostand deleted successfully.');

		return redirect(route('tipostands.index'));
	}
}
