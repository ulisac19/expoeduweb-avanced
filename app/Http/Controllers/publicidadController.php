<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatepublicidadRequest;
use App\Http\Requests\UpdatepublicidadRequest;
use App\Libraries\Repositories\publicidadRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use Storage;

class publicidadController extends AppBaseController
{

	/** @var  publicidadRepository */
	private $publicidadRepository;

	function __construct(publicidadRepository $publicidadRepo)
	{
		$this->publicidadRepository = $publicidadRepo;
	}

	/**
	 * Display a listing of the publicidad.
	 *
	 * @return Response
	 */
	public function index()
	{
		$publicidads = $this->publicidadRepository->paginate(10);

		return view('publicidads.index')
			->with('publicidads', $publicidads);
	}

	/**
	 * Show the form for creating a new publicidad.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('publicidads.create');
	}

	/**
	 * Store a newly created publicidad in storage.
	 *
	 * @param CreatepublicidadRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatepublicidadRequest $request)
	{
		$input = $request->all();

		$dst_archivos = "publicidad/obj/".trim($input['nombre'])."/obj/";
		$dst_imagen = "publicidad/imagen/".trim($input['nombre'])."/imagen/";
		$dst_oclusion = "publicidad/oclusion/".trim($input['nombre'])."/oclusion/";

		Storage::makeDirectory($dst_archivos);
		Storage::makeDirectory($dst_imagen);
		Storage::makeDirectory($dst_oclusion);

		$input['obj']->move('../storage/app/'.$dst_archivos, $input['obj']->getClientOriginalName());
		$input['imagen']->move('../storage/app/'.$dst_imagen, $input['imagen']->getClientOriginalName());
		$input['oclusion']->move('../storage/app/'.$dst_oclusion, $input['oclusion']->getClientOriginalName());

		$publicidad = $this->publicidadRepository->create($input);

		Flash::success('publicidad saved successfully.');

		return redirect(route('publicidads.index'));
	}

	/**
	 * Display the specified publicidad.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$publicidad = $this->publicidadRepository->find($id);

		if(empty($publicidad))
		{
			Flash::error('publicidad not found');

			return redirect(route('publicidads.index'));
		}

		return view('publicidads.show')->with('publicidad', $publicidad);
	}

	/**
	 * Show the form for editing the specified publicidad.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$publicidad = $this->publicidadRepository->find($id);

		if(empty($publicidad))
		{
			Flash::error('publicidad not found');

			return redirect(route('publicidads.index'));
		}

		return view('publicidads.edit')->with('publicidad', $publicidad);
	}

	/**
	 * Update the specified publicidad in storage.
	 *
	 * @param  int              $id
	 * @param UpdatepublicidadRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatepublicidadRequest $request)
	{
		$publicidad = $this->publicidadRepository->find($id);

		if(empty($publicidad))
		{
			Flash::error('publicidad not found');

			return redirect(route('publicidads.index'));
		}

		$publicidad = $this->publicidadRepository->updateRich($request->all(), $id);

		Flash::success('publicidad updated successfully.');

		return redirect(route('publicidads.index'));
	}

	/**
	 * Remove the specified publicidad from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$publicidad = $this->publicidadRepository->find($id);

		if(empty($publicidad))
		{
			Flash::error('publicidad not found');

			return redirect(route('publicidads.index'));
		}

		$this->publicidadRepository->delete($id);

		Flash::success('publicidad deleted successfully.');

		return redirect(route('publicidads.index'));
	}
}
