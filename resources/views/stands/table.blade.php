<table class="table">
    <thead>
			<th>Tipo Stand Id</th>
			<th>Posicion Stand Id</th>
			<th>Nombre</th>
			<th>User Id</th>
    <th width="100px">Action</th>
    </thead>
    <tbody>
    @foreach($stands as $stand)
        <tr>
			<td>{!! $stand->tipo_stand_id !!}</td>
			<td>{!! $stand->posicion_stand_id !!}</td>
			<td>{!! $stand->nombre !!}</td>
			<td>{!! $stand->user_id !!}</td>
            <td>
                <a href="{!! route('faqs.create', ['id'=>$stand->id]) !!}"><i class="glyphicon glyphicon-question-sign"></i></a>
                <a href="{!! route('stands.viewclient', [$stand->id]) !!}"><i class="glyphicon glyphicon-user"></i></a>
                <a href="{!! route('stands.edit', [$stand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('stands.delete', [$stand->id]) !!}" onclick="return confirm('Are you sure wants to delete this stand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
