<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createavatar_medioRequest;
use App\Http\Requests\Updateavatar_medioRequest;
use App\Libraries\Repositories\avatar_medioRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class avatar_medioController extends AppBaseController
{

	/** @var  avatar_medioRepository */
	private $avatarMedioRepository;

	function __construct(avatar_medioRepository $avatarMedioRepo)
	{
		$this->avatarMedioRepository = $avatarMedioRepo;
	}

	/**
	 * Display a listing of the avatar_medio.
	 *
	 * @return Response
	 */
	public function index()
	{
		$avatarMedios = $this->avatarMedioRepository->paginate(10);

		return view('avatarMedios.index')
			->with('avatarMedios', $avatarMedios);
	}

	/**
	 * Show the form for creating a new avatar_medio.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('avatarMedios.create');
	}

	/**
	 * Store a newly created avatar_medio in storage.
	 *
	 * @param Createavatar_medioRequest $request
	 *
	 * @return Response
	 */
	public function store(Createavatar_medioRequest $request)
	{
		$input = $request->all();

		$avatarMedio = $this->avatarMedioRepository->create($input);

		Flash::success('avatar_medio saved successfully.');

		return redirect(route('avatarMedios.index'));
	}

	/**
	 * Display the specified avatar_medio.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$avatarMedio = $this->avatarMedioRepository->find($id);

		if(empty($avatarMedio))
		{
			Flash::error('avatar_medio not found');

			return redirect(route('avatarMedios.index'));
		}

		return view('avatarMedios.show')->with('avatarMedio', $avatarMedio);
	}

	/**
	 * Show the form for editing the specified avatar_medio.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$avatarMedio = $this->avatarMedioRepository->find($id);

		if(empty($avatarMedio))
		{
			Flash::error('avatar_medio not found');

			return redirect(route('avatarMedios.index'));
		}

		return view('avatarMedios.edit')->with('avatarMedio', $avatarMedio);
	}

	/**
	 * Update the specified avatar_medio in storage.
	 *
	 * @param  int              $id
	 * @param Updateavatar_medioRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateavatar_medioRequest $request)
	{
		$avatarMedio = $this->avatarMedioRepository->find($id);

		if(empty($avatarMedio))
		{
			Flash::error('avatar_medio not found');

			return redirect(route('avatarMedios.index'));
		}

		$avatarMedio = $this->avatarMedioRepository->updateRich($request->all(), $id);

		Flash::success('avatar_medio updated successfully.');

		return redirect(route('avatarMedios.index'));
	}

	/**
	 * Remove the specified avatar_medio from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$avatarMedio = $this->avatarMedioRepository->find($id);

		if(empty($avatarMedio))
		{
			Flash::error('avatar_medio not found');

			return redirect(route('avatarMedios.index'));
		}

		$this->avatarMedioRepository->delete($id);

		Flash::success('avatar_medio deleted successfully.');

		return redirect(route('avatarMedios.index'));
	}
}
