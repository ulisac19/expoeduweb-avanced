<table class="table">
    <thead>
    <th>Nombre</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($tipoStands as $tipoStand)
        <tr>
            <td>{!! $tipoStand->nombre !!}</td>
			<td>{!! $tipoStand->oclusion !!}</td>
			<td>{!! $tipoStand->malla !!}</td>
			<td>{!! $tipoStand->imagen_base !!}</td>
            <td>
                <a href="{!! route('tipoStands.edit', [$tipoStand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('tipoStands.delete', [$tipoStand->id]) !!}" onclick="return confirm('Are you sure wants to delete this tipo_stand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
