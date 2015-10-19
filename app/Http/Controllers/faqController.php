<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatefaqRequest;
use App\Http\Requests\UpdatefaqRequest;
use App\Libraries\Repositories\faqRepository;
use Flash;
use Illuminate\Support\Facades\Auth;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class faqController extends AppBaseController
{

	/** @var  faqRepository */
	private $faqRepository;

	function __construct(faqRepository $faqRepo)
	{
		$this->faqRepository = $faqRepo;
	}

	/**
	 * Display a listing of the faq.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$faqs = $this->faqRepository->paginate(10);
		$faqs = \App\Models\Faq::where([ 'usuario_id' => Auth::user()->id ] )->get();
		
		 return view('faqs.index')->with('faqs', $faqs);
	}

	/**
	 * Show the form for creating a new faq.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('faqs.create');
	}

	/**
	 * Store a newly created faq in storage.
	 *
	 * @param CreatefaqRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatefaqRequest $request)
	{
		$input = $request->all();

		$faq = $this->faqRepository->create($input);

		Flash::success('faq saved successfully.');

		return redirect(route('faqs.index'));
	}

	/**
	 * Display the specified faq.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$faq = $this->faqRepository->find($id);

		if(empty($faq))
		{
			Flash::error('faq not found');

			return redirect(route('faqs.index'));
		}

		return view('faqs.show')->with('faq', $faq);
	}

	/**
	 * Show the form for editing the specified faq.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$faq = $this->faqRepository->find($id);

		if(empty($faq))
		{
			Flash::error('faq not found');

			return redirect(route('faqs.index'));
		}

		return view('faqs.edit')->with('faq', $faq);
	}

	/**
	 * Update the specified faq in storage.
	 *
	 * @param  int              $id
	 * @param UpdatefaqRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatefaqRequest $request)
	{
		$faq = $this->faqRepository->find($id);

		if(empty($faq))
		{
			Flash::error('faq not found');

			return redirect(route('faqs.index'));
		}

		$faq = $this->faqRepository->updateRich($request->all(), $id);

		Flash::success('faq updated successfully.');

		return redirect(route('faqs.index'));
	}

	/**
	 * Remove the specified faq from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$faq = $this->faqRepository->find($id);

		if(empty($faq))
		{
			Flash::error('faq not found');

			return redirect(route('faqs.index'));
		}

		$this->faqRepository->delete($id);

		Flash::success('faq deleted successfully.');

		return redirect(route('datos.edit6', [Auth::user()->id]));
	}

	public function gettexto($id)
	{
		$puesto = \App\Models\faq::where(['id'=>$_GET['id']])->get();
	
		return $puesto[0]->msj;
	}

	public function todos()
	{
		$todos = \App\Models\faq::all(); 
		$cad = '';
		foreach ($todos as $faq) 
		{
			$cad = $cad.'<tr> <td><p class="blur" contenteditable="true">'.$faq->titulo.'</p></td><td><p class="blurmsj" contenteditable="true">'.$faq->msj.'</p></td><td><a class="btn btn-danger" href="../../faqs/'.$faq->id.'/delete" onclick="return confirm('."'Esta seguro de eliminar esta pregunta?'".')"><i class="glyphicon glyphicon-trash"></i></a></td></tr>';
		}
	return $cad;
	}

	public function otra()
	{
		$nuevo = new \App\Models\faq;
		$nuevo->titulo = "Ingrese pregunta";
		$nuevo->msj = "Ingrese respuesta";
		$nuevo->usuario_id = Auth::user()->id;
		$nuevo->save();
	}

	public function actualizar()
	{
		$faq = \App\Models\faq::find($_GET["id"]);
		$faq->titulo = $_GET["cad"];
		$faq->save();
	}

	public function actualizar2()
	{
		$faq = \App\Models\faq::find($_GET["id"]);
		$faq->msj = $_GET["cad"];
		$faq->save();
	}

}
