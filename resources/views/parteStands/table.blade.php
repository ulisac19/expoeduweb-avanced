<table class="table">
    <thead>
    <th>Enlace</th>
			<th>Imagen</th>
			<th>Color</th>
			<th>Stand Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($parteStands as $parteStand)
        <tr>
            <td>{!! $parteStand->enlace !!}</td>
			<td>{!! $parteStand->imagen !!}</td>
			<td>{!! $parteStand->color !!}</td>
			<td>{!! $parteStand->stand_id !!}</td>
            <td>
                <a href="{!! route('parteStands.edit', [$parteStand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('parteStands.delete', [$parteStand->id]) !!}" onclick="return confirm('Are you sure wants to delete this parte_stand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
