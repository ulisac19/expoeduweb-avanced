<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
			<th>Color</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($avatarMedios as $avatarMedio)
        <tr>
            <td>{!! $avatarMedio->nombre !!}</td>
			<td>{!! $avatarMedio->descripcion !!}</td>
			<td>{!! $avatarMedio->color_id !!}</td>
            <td>
                <a href="{!! route('avatarMedios.edit', [$avatarMedio->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('avatarMedios.delete', [$avatarMedio->id]) !!}" onclick="return confirm('Are you sure wants to delete this avatar_medio?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
