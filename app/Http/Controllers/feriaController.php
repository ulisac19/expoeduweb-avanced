<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateferiaRequest;
use App\Http\Requests\UpdateferiaRequest;
use App\Libraries\Repositories\feriaRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Storage;
use Response;

class feriaController extends AppBaseController
{

	/** @var  feriaRepository */
	private $feriaRepository;

	function __construct(feriaRepository $feriaRepo)
	{
		$this->feriaRepository = $feriaRepo;
	}

	/**
	 * Display a listing of the feria.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ferias = $this->feriaRepository->paginate(10);

		return view('ferias.index')
			->with('ferias', $ferias);
	}

	/**
	 * Show the form for creating a new feria.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ferias.create');
	}

	/**
	 * Store a newly created feria in storage.
	 *
	 * @param CreateferiaRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateferiaRequest $request)
	{
		$input = $request->all();

		echo "<pre>";
		print_r($input);
		echo "</pre>";

		$dst_plano = "feria/".trim($input['nombre'])."/plano/";
		$dst_archivos = "feria/".trim($input['nombre'])."/archivos/";
		Storage::makeDirectory($dst_plano);
		Storage::makeDirectory($dst_archivos);

		$input['archivos']->move('../storage/app/'.$dst_plano, $input['archivos']->getClientOriginalName());
		$input['plano']->move('../storage/app/'.$dst_archivos, $input['plano']->getClientOriginalName());

		$feria = $this->feriaRepository->create($input);

		Flash::success('feria saved successfully.');

		return redirect(route('ferias.index'));
	}

	/**
	 * Display the specified feria.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$feria = $this->feriaRepository->find($id);

		if(empty($feria))
		{
			Flash::error('feria not found');

			return redirect(route('ferias.index'));
		}

		return view('ferias.show')->with('feria', $feria);
	}

	/**
	 * Show the form for editing the specified feria.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$feria = $this->feriaRepository->find($id);

		if(empty($feria))
		{
			Flash::error('feria not found');

			return redirect(route('ferias.index'));
		}

		return view('ferias.edit')->with('feria', $feria);
	}

	/**
	 * Update the specified feria in storage.
	 *
	 * @param  int              $id
	 * @param UpdateferiaRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateferiaRequest $request)
	{
		$feria = $this->feriaRepository->find($id);

		if(empty($feria))
		{
			Flash::error('feria not found');

			return redirect(route('ferias.index'));
		}

		$feria = $this->feriaRepository->updateRich($request->all(), $id);

		Flash::success('feria updated successfully.');

		return redirect(route('ferias.index'));
	}

	/**
	 * Remove the specified feria from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$feria = $this->feriaRepository->find($id);

		if(empty($feria))
		{
			Flash::error('feria not found');

			return redirect(route('ferias.index'));
		}

		$this->feriaRepository->delete($id);

		Flash::success('feria deleted successfully.');

		return redirect(route('ferias.index'));
	}
}
