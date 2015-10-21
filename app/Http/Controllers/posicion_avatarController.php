<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Createposicion_avatarRequest;
use App\Http\Requests\Updateposicion_avatarRequest;
use App\Libraries\Repositories\posicion_avatarRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class posicion_avatarController extends AppBaseController
{

	/** @var  posicion_avatarRepository */
	private $posicionAvatarRepository;

	function __construct(posicion_avatarRepository $posicionAvatarRepo)
	{
		$this->posicionAvatarRepository = $posicionAvatarRepo;
	}

	/**
	 * Display a listing of the posicion_avatar.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posicionAvatars = $this->posicionAvatarRepository->paginate(10);

		return view('posicionAvatars.index')
			->with('posicionAvatars', $posicionAvatars);
	}

	/**
	 * Show the form for creating a new posicion_avatar.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posicionAvatars.create');
	}

	/**
	 * Store a newly created posicion_avatar in storage.
	 *
	 * @param Createposicion_avatarRequest $request
	 *
	 * @return Response
	 */
	public function store(Createposicion_avatarRequest $request)
	{
		$input = $request->all();

		$posicionAvatar = $this->posicionAvatarRepository->create($input);

		Flash::success('posicion_avatar saved successfully.');

		return redirect(route('posicionAvatars.index'));
	}

	/**
	 * Display the specified posicion_avatar.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$posicionAvatar = $this->posicionAvatarRepository->find($id);

		if(empty($posicionAvatar))
		{
			Flash::error('posicion_avatar not found');

			return redirect(route('posicionAvatars.index'));
		}

		return view('posicionAvatars.show')->with('posicionAvatar', $posicionAvatar);
	}

	/**
	 * Show the form for editing the specified posicion_avatar.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$posicionAvatar = $this->posicionAvatarRepository->find($id);

		if(empty($posicionAvatar))
		{
			Flash::error('posicion_avatar not found');

			return redirect(route('posicionAvatars.index'));
		}

		return view('posicionAvatars.edit')->with('posicionAvatar', $posicionAvatar);
	}

	/**
	 * Update the specified posicion_avatar in storage.
	 *
	 * @param  int              $id
	 * @param Updateposicion_avatarRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Updateposicion_avatarRequest $request)
	{
		$posicionAvatar = $this->posicionAvatarRepository->find($id);

		if(empty($posicionAvatar))
		{
			Flash::error('posicion_avatar not found');

			return redirect(route('posicionAvatars.index'));
		}

		$posicionAvatar = $this->posicionAvatarRepository->updateRich($request->all(), $id);

		Flash::success('posicion_avatar updated successfully.');

		return redirect(route('posicionAvatars.index'));
	}

	/**
	 * Remove the specified posicion_avatar from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$posicionAvatar = $this->posicionAvatarRepository->find($id);

		if(empty($posicionAvatar))
		{
			Flash::error('posicion_avatar not found');

			return redirect(route('posicionAvatars.index'));
		}

		$this->posicionAvatarRepository->delete($id);

		Flash::success('posicion_avatar deleted successfully.');

		return redirect(route('posicionAvatars.index'));
	}

	public function todas()
	{
		return \App\Models\posicion_avatar::all()->toJson();
	}

	public function updatePosicion()
	{
		$x = $_GET['x'];
		$y = $_GET['y'];
		$z = $_GET['z'];
		$rot = $_GET['rot'];
		$action = $_GET['action'];
		$user_id = $_GET['user_id'];

		$numero = \App\Models\posicion_avatar::where(['user_id'=> $user_id])->count();
	
		if($numero == 0)
		{
			$nuevo = new \App\Models\posicion_avatar;
			$nuevo->x = $x;
			$nuevo->y = $y;
			$nuevo->z = $z;
			$nuevo->rot = $rot;
			$nuevo->action = $action;
			$nuevo->user_id = $user_id;
			$nuevo->save();

		}else{
			\App\Models\posicion_avatar::where(['user_id'=>$user_id])->update(['x'=>$x,'y'=>$y,'z'=>$z,'rot'=>$rot,'action'=>$action]);
		}

		return \App\Models\posicion_avatar::all()->toJson();
	}

}
