<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
			<th>Color</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($avatarBajos as $avatarBajo)
        <tr>
            <td>{!! $avatarBajo->nombre !!}</td>
			<td>{!! $avatarBajo->descripcion !!}</td>
			<td>{!! $avatarBajo->color_id !!}</td>
            <td>
                <a href="{!! route('avatarBajos.edit', [$avatarBajo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('avatarBajos.delete', [$avatarBajo->id]) !!}" onclick="return confirm('Are you sure wants to delete this avatar_bajo?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
