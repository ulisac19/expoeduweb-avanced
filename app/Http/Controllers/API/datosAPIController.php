<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\datosRepository;
use App\Models\datos;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class datosAPIController extends AppBaseController
{
	/** @var  datosRepository */
	private $datosRepository;

	function __construct(datosRepository $datosRepo)
	{
		$this->datosRepository = $datosRepo;
	}

	/**
	 * Display a listing of the datos.
	 * GET|HEAD /datos
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos = $this->datosRepository->all();

		return $this->sendResponse($datos->toArray(), "datos retrieved successfully");
	}

	/**
	 * Show the form for creating a new datos.
	 * GET|HEAD /datos/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created datos in storage.
	 * POST /datos
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(datos::$rules) > 0)
			$this->validateRequestOrFail($request, datos::$rules);

		$input = $request->all();

		$datos = $this->datosRepository->create($input);

		return $this->sendResponse($datos->toArray(), "datos saved successfully");
	}

	/**
	 * Display the specified datos.
	 * GET|HEAD /datos/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$datos = $this->datosRepository->apiFindOrFail($id);

		return $this->sendResponse($datos->toArray(), "datos retrieved successfully");
	}

	/**
	 * Show the form for editing the specified datos.
	 * GET|HEAD /datos/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified datos in storage.
	 * PUT/PATCH /datos/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var datos $datos */
		$datos = $this->datosRepository->apiFindOrFail($id);

		$result = $this->datosRepository->updateRich($input, $id);

		$datos = $datos->fresh();

		return $this->sendResponse($datos->toArray(), "datos updated successfully");
	}

	/**
	 * Remove the specified datos from storage.
	 * DELETE /datos/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->datosRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "datos deleted successfully");
	}
}
