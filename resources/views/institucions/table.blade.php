<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Email</th>
			<th>Descripcion</th>
			<th>Logo</th>
			<th>Razon Social</th>
			<th>Rif</th>
			<th>Website</th>
			<th>Facebook</th>
			<th>Twitter</th>
			<th>Instagram</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($institucions as $institucion)
        <tr>
            <td>{!! $institucion->nombre !!}</td>
			<td>{!! $institucion->direccion !!}</td>
			<td>{!! $institucion->telefono !!}</td>
			<td>{!! $institucion->email !!}</td>
			<td>{!! $institucion->descripcion !!}</td>
			<td>{!! $institucion->logo !!}</td>
			<td>{!! $institucion->razon_social !!}</td>
			<td>{!! $institucion->RIF !!}</td>
			<td>{!! $institucion->website !!}</td>
			<td>{!! $institucion->facebook !!}</td>
			<td>{!! $institucion->twitter !!}</td>
			<td>{!! $institucion->instagram !!}</td>
			<td>{!! $institucion->responsable !!}</td>
            <td>
                <a href="{!! route('institucions.edit', [$institucion->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('institucions.delete', [$institucion->id]) !!}" onclick="return confirm('Are you sure wants to delete this institucion?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
