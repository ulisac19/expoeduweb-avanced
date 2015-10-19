<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
			<th>Users Id</th>
			<th>Avatar Alto Id</th>
			<th>Avatar Bajo Id</th>
			<th>Avatar Medio Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($avatars as $avatar)
        <tr>
            <td>{!! $avatar->nombre !!}</td>
			<td>{!! $avatar->descripcion !!}</td>
			<td>{!! $avatar->users_id !!}</td>
			<td>{!! $avatar->avatar_alto_id !!}</td>
			<td>{!! $avatar->avatar_bajo_id !!}</td>
			<td>{!! $avatar->avatar_medio_id !!}</td>
            <td>
                <a href="{!! route('avatars.edit', [$avatar->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('avatars.delete', [$avatar->id]) !!}" onclick="return confirm('Are you sure wants to delete this avatar?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
