<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Archivos</th>
			<th>Plano</th>
			<th>Url</th>
			<th>Fecha Inicio</th>
			<th>Fecha Final</th>
			<th>Fecha Desmontaje</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($ferias as $feria)
        <tr>
            <td>{!! $feria->nombre !!}</td>
			<td>{!! $feria->archivos !!}</td>
			<td>{!! $feria->plano !!}</td>
			<td>{!! $feria->url !!}</td>
			<td>{!! $feria->fecha_inicio !!}</td>
			<td>{!! $feria->fecha_final !!}</td>
			<td>{!! $feria->fecha_desmontaje !!}</td>
            <td>
                <a href="{!! route('ferias.edit', [$feria->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('ferias.delete', [$feria->id]) !!}" onclick="return confirm('Are you sure wants to delete this feria?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
