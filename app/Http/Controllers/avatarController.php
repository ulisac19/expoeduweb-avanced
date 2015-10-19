<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateavatarRequest;
use App\Http\Requests\UpdateavatarRequest;
use App\Libraries\Repositories\avatarRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class avatarController extends AppBaseController
{

	/** @var  avatarRepository */
	private $avatarRepository;

	function __construct(avatarRepository $avatarRepo)
	{
		$this->avatarRepository = $avatarRepo;
	}

	/**
	 * Display a listing of the avatar.
	 *
	 * @return Response
	 */
	public function index()
	{
		$avatars = $this->avatarRepository->paginate(10);

		return view('avatars.index')
			->with('avatars', $avatars);
	}

	/**
	 * Show the form for creating a new avatar.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('avatars.create');
	}

	/**
	 * Store a newly created avatar in storage.
	 *
	 * @param CreateavatarRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateavatarRequest $request)
	{
		$input = $request->all();

		$avatar = $this->avatarRepository->create($input);

		Flash::success('avatar saved successfully.');

		return redirect(route('avatars.index'));
	}

	/**
	 * Display the specified avatar.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$avatar = $this->avatarRepository->find($id);

		if(empty($avatar))
		{
			Flash::error('avatar not found');

			return redirect(route('avatars.index'));
		}

		return view('avatars.show')->with('avatar', $avatar);
	}

	/**
	 * Show the form for editing the specified avatar.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$avatar = $this->avatarRepository->find($id);

		if(empty($avatar))
		{
			Flash::error('avatar not found');

			return redirect(route('avatars.index'));
		}

		return view('avatars.edit')->with('avatar', $avatar);
	}

	/**
	 * Update the specified avatar in storage.
	 *
	 * @param  int              $id
	 * @param UpdateavatarRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateavatarRequest $request)
	{
		$avatar = $this->avatarRepository->find($id);

		if(empty($avatar))
		{
			Flash::error('avatar not found');

			return redirect(route('avatars.index'));
		}

		$avatar = $this->avatarRepository->updateRich($request->all(), $id);

		Flash::success('avatar updated successfully.');

		return redirect(route('avatars.index'));
	}

	/**
	 * Remove the specified avatar from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$avatar = $this->avatarRepository->find($id);

		if(empty($avatar))
		{
			Flash::error('avatar not found');

			return redirect(route('avatars.index'));
		}

		$this->avatarRepository->delete($id);

		Flash::success('avatar deleted successfully.');

		return redirect(route('avatars.index'));
	}
}
