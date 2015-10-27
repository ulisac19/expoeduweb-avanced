<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatesucursalRequest;
use App\Http\Requests\UpdatesucursalRequest;
use App\Libraries\Repositories\sucursalRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class sucursalController extends AppBaseController
{

	/** @var  sucursalRepository */
	private $sucursalRepository;

	function __construct(sucursalRepository $sucursalRepo)
	{
		$this->sucursalRepository = $sucursalRepo;
	}

	/**
	 * Display a listing of the sucursal.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sucursals = $this->sucursalRepository->paginate(10);

		return view('sucursals.index')
			->with('sucursals', $sucursals);
	}

	/**
	 * Show the form for creating a new sucursal.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sucursals.create');
	}

	/**
	 * Store a newly created sucursal in storage.
	 *
	 * @param CreatesucursalRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatesucursalRequest $request)
	{
		$input = $request->all();

		$sucursal = $this->sucursalRepository->create($input);

		Flash::success('sucursal saved successfully.');

		return redirect(route('sucursals.index'));
	}

	/**
	 * Display the specified sucursal.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$sucursal = $this->sucursalRepository->find($id);

		if(empty($sucursal))
		{
			Flash::error('sucursal not found');

			return redirect(route('sucursals.index'));
		}

		return view('sucursals.show')->with('sucursal', $sucursal);
	}

	/**
	 * Show the form for editing the specified sucursal.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$sucursal = $this->sucursalRepository->find($id);

		if(empty($sucursal))
		{
			Flash::error('sucursal not found');

			return redirect(route('sucursals.index'));
		}

		return view('sucursals.edit')->with('sucursal', $sucursal);
	}

	/**
	 * Update the specified sucursal in storage.
	 *
	 * @param  int              $id
	 * @param UpdatesucursalRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatesucursalRequest $request)
	{
		$sucursal = $this->sucursalRepository->find($id);

		if(empty($sucursal))
		{
			Flash::error('sucursal not found');

			return redirect(route('sucursals.index'));
		}

		$sucursal = $this->sucursalRepository->updateRich($request->all(), $id);

		Flash::success('sucursal updated successfully.');

		return redirect(route('sucursals.index'));
	}

	/**
	 * Remove the specified sucursal from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$sucursal = $this->sucursalRepository->find($id);

		if(empty($sucursal))
		{
			Flash::error('sucursal not found');

			return redirect(route('sucursals.index'));
		}

		$this->sucursalRepository->delete($id);

		Flash::success('sucursal deleted successfully.');

		return redirect(route('sucursals.index'));
	}
}
