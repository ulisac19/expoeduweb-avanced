<table class="table">
    <thead>
    <th>Numero</th>
			<th>X</th>
			<th>Y</th>
			<th>Orientacion</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($posicionStands as $posicionStand)
        <tr>
            <td>{!! $posicionStand->numero !!}</td>
			<td>{!! $posicionStand->x !!}</td>
			<td>{!! $posicionStand->y !!}</td>
			<td>{!! $posicionStand->orientacion !!}</td>
            <td>
                <a href="{!! route('posicionStands.edit', [$posicionStand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('posicionStands.delete', [$posicionStand->id]) !!}" onclick="return confirm('Are you sure wants to delete this posicion_stand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
