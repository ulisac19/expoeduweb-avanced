<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Estado Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($ciudads as $ciudad)
        <tr>
            <td>{!! $ciudad->nombre !!}</td>
			<td>{!! $ciudad->estado_id !!}</td>
            <td>
                <a href="{!! route('ciudads.edit', [$ciudad->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('ciudads.delete', [$ciudad->id]) !!}" onclick="return confirm('Are you sure wants to delete this ciudad?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
