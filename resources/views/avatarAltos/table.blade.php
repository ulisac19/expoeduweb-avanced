<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
			<th>Color Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($avatarAltos as $avatarAlto)
        <tr>
            <td>{!! $avatarAlto->nombre !!}</td>
			<td>{!! $avatarAlto->descripcion !!}</td>
			<td>{!! $avatarAlto->color_id !!}</td>
            <td>
                <a href="{!! route('avatarAltos.edit', [$avatarAlto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('avatarAltos.delete', [$avatarAlto->id]) !!}" onclick="return confirm('Are you sure wants to delete this avatar_alto?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
