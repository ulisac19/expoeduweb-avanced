<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createavatar_altoRequest;
use App\Http\Requests\Updateavatar_altoRequest;
use App\Libraries\Repositories\avatar_altoRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class avatar_altoController extends AppBaseController
{

	/** @var  avatar_altoRepository */
	private $avatarAltoRepository;

	function __construct(avatar_altoRepository $avatarAltoRepo)
	{
		$this->avatarAltoRepository = $avatarAltoRepo;
	}

	/**
	 * Display a listing of the avatar_alto.
	 *
	 * @return Response
	 */
	public function index()
	{
		$avatarAltos = $this->avatarAltoRepository->paginate(10);

		return view('avatarAltos.index')
			->with('avatarAltos', $avatarAltos);
	}

	/**
	 * Show the form for creating a new avatar_alto.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('avatarAltos.create');
	}

	/**
	 * Store a newly created avatar_alto in storage.
	 *
	 * @param Createavatar_altoRequest $request
	 *
	 * @return Response
	 */
	public function store(Createavatar_altoRequest $request)
	{
		$input = $request->all();

		$avatarAlto = $this->avatarAltoRepository->create($input);

		Flash::success('avatar_alto saved successfully.');

		return redirect(route('avatarAltos.index'));
	}

	/**
	 * Display the specified avatar_alto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$avatarAlto = $this->avatarAltoRepository->find($id);

		if(empty($avatarAlto))
		{
			Flash::error('avatar_alto not found');

			return redirect(route('avatarAltos.index'));
		}

		return view('avatarAltos.show')->with('avatarAlto', $avatarAlto);
	}

	/**
	 * Show the form for editing the specified avatar_alto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$avatarAlto = $this->avatarAltoRepository->find($id);

		if(empty($avatarAlto))
		{
			Flash::error('avatar_alto not found');

			return redirect(route('avatarAltos.index'));
		}

		return view('avatarAltos.edit')->with('avatarAlto', $avatarAlto);
	}

	/**
	 * Update the specified avatar_alto in storage.
	 *
	 * @param  int              $id
	 * @param Updateavatar_altoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateavatar_altoRequest $request)
	{
		$avatarAlto = $this->avatarAltoRepository->find($id);

		if(empty($avatarAlto))
		{
			Flash::error('avatar_alto not found');

			return redirect(route('avatarAltos.index'));
		}

		$avatarAlto = $this->avatarAltoRepository->updateRich($request->all(), $id);

		Flash::success('avatar_alto updated successfully.');

		return redirect(route('avatarAltos.index'));
	}

	/**
	 * Remove the specified avatar_alto from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$avatarAlto = $this->avatarAltoRepository->find($id);

		if(empty($avatarAlto))
		{
			Flash::error('avatar_alto not found');

			return redirect(route('avatarAltos.index'));
		}

		$this->avatarAltoRepository->delete($id);

		Flash::success('avatar_alto deleted successfully.');

		return redirect(route('avatarAltos.index'));
	}
}
