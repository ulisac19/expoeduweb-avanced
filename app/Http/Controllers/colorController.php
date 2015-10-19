<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatecolorRequest;
use App\Http\Requests\UpdatecolorRequest;
use App\Libraries\Repositories\colorRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class colorController extends AppBaseController
{

	/** @var  colorRepository */
	private $colorRepository;

	function __construct(colorRepository $colorRepo)
	{
		$this->colorRepository = $colorRepo;
	}

	/**
	 * Display a listing of the color.
	 *
	 * @return Response
	 */
	public function index()
	{
		$colors = $this->colorRepository->paginate(10);

		return view('colors.index')
			->with('colors', $colors);
	}

	/**
	 * Show the form for creating a new color.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('colors.create');
	}

	/**
	 * Store a newly created color in storage.
	 *
	 * @param CreatecolorRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatecolorRequest $request)
	{
		$input = $request->all();

		$color = $this->colorRepository->create($input);

		Flash::success('color saved successfully.');

		return redirect(route('colors.index'));
	}

	/**
	 * Display the specified color.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$color = $this->colorRepository->find($id);

		if(empty($color))
		{
			Flash::error('color not found');

			return redirect(route('colors.index'));
		}

		return view('colors.show')->with('color', $color);
	}

	/**
	 * Show the form for editing the specified color.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$color = $this->colorRepository->find($id);

		if(empty($color))
		{
			Flash::error('color not found');

			return redirect(route('colors.index'));
		}

		return view('colors.edit')->with('color', $color);
	}

	/**
	 * Update the specified color in storage.
	 *
	 * @param  int              $id
	 * @param UpdatecolorRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatecolorRequest $request)
	{
		$color = $this->colorRepository->find($id);

		if(empty($color))
		{
			Flash::error('color not found');

			return redirect(route('colors.index'));
		}

		$color = $this->colorRepository->updateRich($request->all(), $id);

		Flash::success('color updated successfully.');

		return redirect(route('colors.index'));
	}

	/**
	 * Remove the specified color from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$color = $this->colorRepository->find($id);

		if(empty($color))
		{
			Flash::error('color not found');

			return redirect(route('colors.index'));
		}

		$this->colorRepository->delete($id);

		Flash::success('color deleted successfully.');

		return redirect(route('colors.index'));
	}
}
