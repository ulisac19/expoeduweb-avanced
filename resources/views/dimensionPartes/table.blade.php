<table class="table">
    <thead>
    <th>X</th>
			<th>Y</th>
			<th>Ancho</th>
			<th>Alto</th>
			<th>Orientacion</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($dimensionPartes as $dimensionParte)
        <tr>
            <td>{!! $dimensionParte->x !!}</td>
			<td>{!! $dimensionParte->y !!}</td>
			<td>{!! $dimensionParte->ancho !!}</td>
			<td>{!! $dimensionParte->alto !!}</td>
			<td>{!! $dimensionParte->orientacion !!}</td>
            <td>
                <a href="{!! route('dimensionPartes.edit', [$dimensionParte->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('dimensionPartes.delete', [$dimensionParte->id]) !!}" onclick="return confirm('Are you sure wants to delete this dimension_parte?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
