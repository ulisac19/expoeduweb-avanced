<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Clickeable</th>
			<th>Tipo</th>
			<th>Tipo Stand Id</th>
			<th>Parte Stand Id</th>
			<th>Dimension Parte Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($parteTipos as $parteTipo)
        <tr>
            <td>{!! $parteTipo->nombre !!}</td>
			<td>{!! $parteTipo->clickeable !!}</td>
			<td>{!! $parteTipo->tipo !!}</td>
			<td>{!! $parteTipo->tipo_stand_id !!}</td>
			<td>{!! $parteTipo->parte_stand_id !!}</td>
			<td>{!! $parteTipo->dimension_parte_id !!}</td>
            <td>
                <a href="{!! route('parteTipos.edit', [$parteTipo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('parteTipos.delete', [$parteTipo->id]) !!}" onclick="return confirm('Are you sure wants to delete this parte_tipo?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
