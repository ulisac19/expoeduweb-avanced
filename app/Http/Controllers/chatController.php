<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatechatRequest;
use App\Http\Requests\UpdatechatRequest;
use App\Libraries\Repositories\chatRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;

class chatController extends AppBaseController
{

	/** @var  chatRepository */
	private $chatRepository;

	function __construct(chatRepository $chatRepo)
	{
		$this->chatRepository = $chatRepo;
	}

	/**
	 * Display a listing of the chat.
	 *
	 * @return Response
	 */
	public function index()
	{
		$chats = $this->chatRepository->paginate(10);

		return view('chats.index')
			->with('chats', $chats);
	}

	/**
	 * Show the form for creating a new chat.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('chats.create');
	}

	/**
	 * Store a newly created chat in storage.
	 *
	 * @param CreatechatRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatechatRequest $request)
	{
		$input = $request->all();

		$chat = $this->chatRepository->create($input);

		Flash::success('chat saved successfully.');

		return redirect(route('chats.index'));
	}

	/**
	 * Display the specified chat.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$chat = $this->chatRepository->find($id);

		if(empty($chat))
		{
			Flash::error('chat not found');

			return redirect(route('chats.index'));
		}

		return view('chats.show')->with('chat', $chat);
	}

	/**
	 * Show the form for editing the specified chat.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$chat = $this->chatRepository->find($id);

		if(empty($chat))
		{
			Flash::error('chat not found');

			return redirect(route('chats.index'));
		}

		return view('chats.edit')->with('chat', $chat);
	}

	/**
	 * Update the specified chat in storage.
	 *
	 * @param  int              $id
	 * @param UpdatechatRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatechatRequest $request)
	{
		$chat = $this->chatRepository->find($id);

		if(empty($chat))
		{
			Flash::error('chat not found');

			return redirect(route('chats.index'));
		}

		$chat = $this->chatRepository->updateRich($request->all(), $id);

		Flash::success('chat updated successfully.');

		return redirect(route('chats.index'));
	}

	/**
	 * Remove the specified chat from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$chat = $this->chatRepository->find($id);

		if(empty($chat))
		{
			Flash::error('chat not found');

			return redirect(route('chats.index'));
		}

		$this->chatRepository->delete($id);

		Flash::success('chat deleted successfully.');

		return redirect(route('chats.index'));
	}
	public function comentario()
	{
		if($_GET['txt'] != ''){
			$chat = new \App\Models\chat;
			$chat->msj = $_GET['txt'];
			$chat->user_id2 = $_GET['id2'];
			$chat->user_id1 = $_GET['id1'];
			$chat->estado = 1;
			$chat->enviado = date('Y-m-d H:i:s');
			$chat->save();		
			//--------------------------------------------------------------------
			$cad = ''; 	
			if( $_GET['id1'] == $chat->user_id1 ) // enviado
		    {
		    	$lado = "msg_sent";
		    	$ladoInt = 2;
		    }

		    if( $_GET['id1'] == $chat->user_id2 ) // recibido
		    {
		    	$lado = "base_receive";
		    	$ladoInt = 1;
		    }

	                	
	          $cad = $cad.'<div class="row msg_container base_sent">';
	              if($ladoInt == 1 ){                        
	                 $cad = $cad.'<div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div>';
	              }
	                 $cad = $cad.'<div class="col-md-10 col-xs-10"><div class="messages <?= $lado ?>">'.$chat->msj.'<time datetime="'.$chat->enviado.'">'.$chat->enviado.'</time></div></div>';
	              if($ladoInt == 2 ){                        
	                 $cad = $cad.'<br><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div>';
	              }
	             $cad = $cad.'</div>';
	             return json_encode(['cad'=>$cad, 'cant'=>\App\Models\chat::where(['user_id1'=>$_GET['id1'] ])->orWhere(['user_id2'=>$_GET['id1'] ])->count()]);
			
		}       

	}
	public function todos($id, $id2)
	{
		$chats = \App\Models\chat::orWhere(['user_id1'=>$id ])->orWhere(['user_id2'=>$id ])->orWhere(['user_id1'=>$id2 ])->orWhere(['user_id2'=>$id2 ])->get();
        $cad = ''; 		
        $i = 1;       
                foreach ($chats as $chat) 
                {
                	if( ( $chat->user_id1 == $id && $chat->user_id2 == $id2 ) || ( $chat->user_id1 == $id2 && $chat->user_id2 == $id ) ) 
                	{
		         		if( $id == $chat->user_id1 ) // enviado
		         		{
		         			$lado = "msg_sent";
		         			$ladoInt = 2;
		         		}

		         		if( $id == $chat->user_id2 ) // recibido
		         		{
		         			$lado = "base_receive";
		         			$ladoInt = 1;
		         		}

	                	
	                	$cad = $cad.'<div id="chat'.$i.'" class="row msg_container base_sent">';
	                     if($ladoInt == 1 ){                        
	                        $cad = $cad.'<div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div>';
	                     }
	                        $cad = $cad.'<div class="col-md-10 col-xs-10"><div class="messages <?= $lado ?>">'.$chat->msj.'<br><time datetime="'.$chat->enviado.'">'.$chat->enviado.'</time></div></div>';
	                     if($ladoInt == 2 ){                        
	                        $cad = $cad.'<br><div class="col-md-2 col-xs-2 avatar"><img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive "></div>';
	                     }
	                    $cad = $cad.'</div>';
	                	$i++;
                	}
                }
		return $cad;

	}
		
}
