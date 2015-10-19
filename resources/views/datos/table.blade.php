<table class="table">
    <thead>
    <th>Users Id</th>
			<th>Facebook</th>
			<th>Google</th>
			<th>Instagram</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Fecha Nacimiento</th>
			<th>Genero</th>
			<th>Telefono</th>
			<th>Ciudad Id</th>
			<th>Tipo Login</th>
			<th>Avatar</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($datos as $datos)
        <tr>
            <td>{!! $datos->users_id !!}</td>
			<td>{!! $datos->facebook !!}</td>
			<td>{!! $datos->google !!}</td>
			<td>{!! $datos->instagram !!}</td>
			<td>{!! $datos->nombres !!}</td>
			<td>{!! $datos->apellidos !!}</td>
			<td>{!! $datos->fecha_nacimiento !!}</td>
			<td>{!! $datos->genero !!}</td>
			<td>{!! $datos->telefono !!}</td>
			<td>{!! $datos->ciudad_id !!}</td>
			<td>{!! $datos->tipo_login !!}</td>
			<td>{!! $datos->avatar !!}</td>
            <td>
                <a href="{!! route('datos.edit', [$datos->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('datos.delete', [$datos->id]) !!}" onclick="return confirm('Are you sure wants to delete this datos?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
