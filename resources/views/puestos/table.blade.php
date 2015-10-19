<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Coordenadax</th>
			<th>Coordenaday</th>
			<th>Ancho</th>
			<th>Largo</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($puestos as $puesto)
        <tr>
            <td>{!! $puesto->nombre !!}</td>
			<td>{!! $puesto->coordenadaX !!}</td>
			<td>{!! $puesto->coordenadaY !!}</td>
			<td>{!! $puesto->ancho !!}</td>
			<td>{!! $puesto->largo !!}</td>
            <td>
                <a href="{!! route('puestos.edit', [$puesto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('puestos.delete', [$puesto->id]) !!}" onclick="return confirm('Are you sure wants to delete this puesto?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
