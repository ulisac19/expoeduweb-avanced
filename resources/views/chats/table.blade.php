<table class="table">
    <thead>
    <th>User Id1</th>
			<th>User Id2</th>
			<th>Enviado</th>
			<th>Visto</th>
			<th>Msj</th>
			<th>Estado</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($chats as $chat)
        <tr>
            <td>{!! $chat->user_id1 !!}</td>
			<td>{!! $chat->user_id2 !!}</td>
			<td>{!! $chat->enviado !!}</td>
			<td>{!! $chat->visto !!}</td>
			<td>{!! $chat->msj !!}</td>
			<td>{!! $chat->estado !!}</td>
            <td>
                <a href="{!! route('chats.edit', [$chat->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('chats.delete', [$chat->id]) !!}" onclick="return confirm('Are you sure wants to delete this chat?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
