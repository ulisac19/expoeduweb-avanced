<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatestandRequest;
use App\Http\Requests\UpdatestandRequest;
use App\Libraries\Repositories\standRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use Storage;

class standController extends AppBaseController
{

	/** @var  standRepository */
	private $standRepository;

	function __construct(standRepository $standRepo)
	{
		$this->standRepository = $standRepo;
	}

	/**
	 * Display a listing of the stand.
	 *
	 * @return Response
	 */
	public function index()
	{
		$stands = $this->standRepository->paginate(10);

		return view('stands.index')
			->with('stands', $stands);
	}

	/**
	 * Show the form for creating a new stand.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('stands.create');
	}

	/**
	 * Store a newly created stand in storage.
	 *
	 * @param CreatestandRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatestandRequest $request)
	{
		$fields = $request->all();
		
		if(!isset($fields['id']))
		{
			$tipo = \App\Models\tipo_stand::find($fields['tipo_stand_id']);
			$vector = explode(' ', $tipo->nombre);

			$numero = $vector[1];
			$letra = substr($tipo->nombre,0,1);
			$pos = $fields['posicion_stand_id'];
			$like = $letra.'-'.$numero.'-'.$pos;
			
			$posicion = \App\Models\posiciones::where(['stand'=>$like])->get();
		
			$pos_act = \App\Models\posiciones::find($posicion[0]->id);
			$pos_act->usado = 1;
			$pos_act->save();
		
			$stand = $this->standRepository->create($fields);

			Flash::success('stand saved successfully.');

			return redirect(route('stands.index'));
		}

		$stand = \App\Models\stand::find($fields['id']);
		$tipo_stand = \App\Models\tipo_stand::find($fields['tipo_stand_id']);

		if($tipo_stand->id == 1) // oro1 
		{
			$posX = [24,356,679,679,1726];
			$posY = [28,28,28,544,44];
			$ancho = [291,291,280,280,233];
			$alto = [755,755,495,495,605];
		}
		if($tipo_stand->id == 2) // oro2 
		{
			$posX = [24,356,674,985,1674];
			$posY = [28,28,28,29,32];
			$ancho = [291,291,291,392,233];
			$alto = [755,755,755,755,605];
		}
		if($tipo_stand->id == 3) // oro3 
		{
			$posX = [24,356,666,1033,1674];
			$posY = [28,28,26,24,32];
			$ancho = [291,291,328,328,233];
			$alto = [755,755,756,756,605];
		}
		if($tipo_stand->id == 4) // plata1 
		{
			$posX = [10,474,946];
			$posY = [13,13,13];
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
		}
		if($tipo_stand->id == 5) // plata2 
		{
			$posX = [10,474,946];
			$posY = [13,13,13];
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
		}
		if($tipo_stand->id == 6) // plata3 
		{
			$posX = [10,474,946];
			$posY = [13,13,13];
			$ancho = [426,426,426];
			$alto = [1106,1106,1106];
		}
		if($tipo_stand->id == 7) // bronce1 
		{
			$posX = [12, 691];
			$posY = [7, 7];
			$ancho = [626, 1446];
			$alto = [626, 1446];
		}
		if($tipo_stand->id == 8) // bronce2 
		{
			$posX = [18, 806];
			$posY = [17, 7];
			$ancho = [707, 707];
			$alto = [1450, 1450];
		}

		if($tipo_stand->id == 9) // bronce3 
		{
			$posX = [13, 893];
			$posY = [7, 7];
			$ancho = [830, 830];
			$alto = [1437, 1437];
		}


		for ($i = 1; $i < $fields['cantidad'] ; $i++) 
		{ 
		
		if(isset($fields['pendon'.$i] ))
			if($fields['pendon'.$i]->getError() == 0)
			{
				$ruta_pendon1 = "tmp/".str_limit($fields['_token'], 5, '');
				Storage::makeDirectory($ruta_pendon1);

				Storage::makeDirectory('stands/'.$stand->user_id);
					
				$fields['pendon'.$i]->move('../storage/app/'.$ruta_pendon1, $fields['pendon'.$i]->getClientOriginalName());
					
				if($fields['pendon'.$i]->getClientMimeType() == 'image/jpeg')
					$origen = imagecreatefromjpeg('../storage/app/'.$ruta_pendon1.'/'.$fields['pendon'.$i]->getClientOriginalName());

				if($fields['pendon'.$i]->getClientMimeType() == 'image/png')
					$origen = imagecreatefrompng('../storage/app/'.$ruta_pendon1.'/'.$fields['pendon'.$i]->getClientOriginalName());
				if($i == 1)
				{
					$destinotxt = "../storage/app/tipo/".trim($tipo_stand->nombre)."/imagen_base/".$tipo_stand->imagen_base;
					$destino = imagecreatefromjpeg($destinotxt);
				}else{
					$destinotxt = '../storage/app/stands/'.$stand->user_id.'/'.$tipo_stand->imagen_base;
					$destino = imagecreatefromjpeg($destinotxt);
				}

				// Copiar y fusionar
				imagecopymerge($destino, $origen, $posX[$i-1], $posY[$i-1], 0, 0, $ancho[$i-1], $alto[$i-1], 100);

				imagejpeg($destino,'../storage/app/stands/'.$stand->user_id.'/'.$tipo_stand->imagen_base);
				$stand->imagen = $destinotxt;
				$stand->save();
				imagedestroy($destino);
				imagedestroy($origen);
				
				// eliminar 
				Storage::delete($ruta_pendon1.'/'.$fields['pendon'.$i]->getClientOriginalName());
				Storage::deleteDirectory($ruta_pendon1);
			}
		}
		


		Flash::success('stand saved successfully.');

		return redirect(route('stands.index'));
	}

	/**
	 * Display the specified stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$stand = $this->standRepository->find($id);

		if(empty($stand))
		{
			Flash::error('stand not found');

			return redirect(route('stands.index'));
		}

		return view('stands.show')->with('stand', $stand);
	}

	/**
	 * Show the form for editing the specified stand.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$stand = $this->standRepository->find($id);

		if(empty($stand))
		{
			Flash::error('stand not found');

			return redirect(route('stands.index'));
		}

		return view('stands.edit')->with('stand', $stand);
	}

	/**
	 * Update the specified stand in storage.
	 *
	 * @param  int              $id
	 * @param UpdatestandRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatestandRequest $request)
	{
		$stand = $this->standRepository->find($id);

		if(empty($stand))
		{
			Flash::error('stand not found');

			return redirect(route('stands.index'));
		}

		$stand = $this->standRepository->updateRich($request->all(), $id);

		Flash::success('stand updated successfully.');

		return redirect(route('stands.index'));
	}

	/**
	 * Remove the specified stand from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$stand = $this->standRepository->find($id);

		if(empty($stand))
		{
			Flash::error('stand not found');

			return redirect(route('stands.index'));
		}

		$this->standRepository->delete($id);

		Flash::success('stand deleted successfully.');

		return redirect(route('stands.index'));
	}

	public function viewstand($id)
	{
		$stand = \App\Models\stand::find($id);
		
		return view('stands.viewclient')->with('stand', $stand);
	}
}
