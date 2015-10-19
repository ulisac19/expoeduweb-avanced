<table class="table">
    <thead>
    <th>Stand</th>
			<th>Posx</th>
			<th>Posy</th>
			<th>Posz</th>
			<th>Rotx</th>
			<th>Roty</th>
			<th>Rotz</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($posiciones as $posiciones)
        <tr>
            <td>{!! $posiciones->stand !!}</td>
			<td>{!! $posiciones->posx !!}</td>
			<td>{!! $posiciones->posy !!}</td>
			<td>{!! $posiciones->posz !!}</td>
			<td>{!! $posiciones->rotx !!}</td>
			<td>{!! $posiciones->roty !!}</td>
			<td>{!! $posiciones->rotz !!}</td>
            <td>
                <a href="{!! route('posiciones.edit', [$posiciones->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('posiciones.delete', [$posiciones->id]) !!}" onclick="return confirm('Are you sure wants to delete this posiciones?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
