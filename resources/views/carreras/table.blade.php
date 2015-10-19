<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($carreras as $carrera)
        <tr>
            <td>{!! $carrera->nombre !!}</td>
			<td>{!! $carrera->descripcion !!}</td>
            <td>
                <a href="{!! route('carreras.edit', [$carrera->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('carreras.delete', [$carrera->id]) !!}" onclick="return confirm('Are you sure wants to delete this carrera?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
