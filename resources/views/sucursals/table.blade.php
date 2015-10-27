<table class="table">
    <thead>
    <th>Institucion Id</th>
			<th>Lat</th>
			<th>Lng</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($sucursals as $sucursal)
        <tr>
            <td>{!! $sucursal->institucion_id !!}</td>
			<td>{!! $sucursal->lat !!}</td>
			<td>{!! $sucursal->lng !!}</td>
            <td>
                <a href="{!! route('sucursals.edit', [$sucursal->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('sucursals.delete', [$sucursal->id]) !!}" onclick="return confirm('Are you sure wants to delete this sucursal?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
