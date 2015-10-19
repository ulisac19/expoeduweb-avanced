<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createavatar_bajoRequest;
use App\Http\Requests\Updateavatar_bajoRequest;
use App\Libraries\Repositories\avatar_bajoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class avatar_bajoController extends AppBaseController
{

	/** @var  avatar_bajoRepository */
	private $avatarBajoRepository;

	function __construct(avatar_bajoRepository $avatarBajoRepo)
	{
		$this->avatarBajoRepository = $avatarBajoRepo;
	}

	/**
	 * Display a listing of the avatar_bajo.
	 *
	 * @return Response
	 */
	public function index()
	{
		$avatarBajos = $this->avatarBajoRepository->paginate(10);

		return view('avatarBajos.index')
			->with('avatarBajos', $avatarBajos);
	}

	/**
	 * Show the form for creating a new avatar_bajo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('avatarBajos.create');
	}

	/**
	 * Store a newly created avatar_bajo in storage.
	 *
	 * @param Createavatar_bajoRequest $request
	 *
	 * @return Response
	 */
	public function store(Createavatar_bajoRequest $request)
	{
		$input = $request->all();

		$avatarBajo = $this->avatarBajoRepository->create($input);

		Flash::success('avatar_bajo saved successfully.');

		return redirect(route('avatarBajos.index'));
	}

	/**
	 * Display the specified avatar_bajo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$avatarBajo = $this->avatarBajoRepository->find($id);

		if(empty($avatarBajo))
		{
			Flash::error('avatar_bajo not found');

			return redirect(route('avatarBajos.index'));
		}

		return view('avatarBajos.show')->with('avatarBajo', $avatarBajo);
	}

	/**
	 * Show the form for editing the specified avatar_bajo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$avatarBajo = $this->avatarBajoRepository->find($id);

		if(empty($avatarBajo))
		{
			Flash::error('avatar_bajo not found');

			return redirect(route('avatarBajos.index'));
		}

		return view('avatarBajos.edit')->with('avatarBajo', $avatarBajo);
	}

	/**
	 * Update the specified avatar_bajo in storage.
	 *
	 * @param  int              $id
	 * @param Updateavatar_bajoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateavatar_bajoRequest $request)
	{
		$avatarBajo = $this->avatarBajoRepository->find($id);

		if(empty($avatarBajo))
		{
			Flash::error('avatar_bajo not found');

			return redirect(route('avatarBajos.index'));
		}

		$avatarBajo = $this->avatarBajoRepository->updateRich($request->all(), $id);

		Flash::success('avatar_bajo updated successfully.');

		return redirect(route('avatarBajos.index'));
	}

	/**
	 * Remove the specified avatar_bajo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$avatarBajo = $this->avatarBajoRepository->find($id);

		if(empty($avatarBajo))
		{
			Flash::error('avatar_bajo not found');

			return redirect(route('avatarBajos.index'));
		}

		$this->avatarBajoRepository->delete($id);

		Flash::success('avatar_bajo deleted successfully.');

		return redirect(route('avatarBajos.index'));
	}
}
