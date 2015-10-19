<table class="table">
    <thead>
    <th>Logoyaccesomapa</th>
			<th>Pendon1</th>
			<th>Pendon2</th>
			<th>Pendon3</th>
			<th>Pendon3</th>
			<th>Pendon4</th>
			<th>Pendon5</th>
			<th>Color mesa</th>
			<th>Color mural</th>
			<th>Imagen mesa</th>
			<th>Stan Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($datosStands as $datosStand)
        <tr>
			<td>{!! $datosStand->pendon1 !!}</td>
			<td>{!! $datosStand->pendon2 !!}</td>
			<td>{!! $datosStand->pendon3 !!}</td>
			<td>{!! $datosStand->pendon3 !!}</td>
			<td>{!! $datosStand->pendon4 !!}</td>
			<td>{!! $datosStand->pendon5 !!}</td>
			<td>{!! $datosStand->color_mesa !!}</td>
			<td>{!! $datosStand->color_mural !!}</td>
			<td>{!! $datosStand->imagen_mesa !!}</td>
			<td>{!! $datosStand->stan_id !!}</td>
            <td>
                <a href="{!! route('datosStands.edit', [$datosStand->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('datosStands.delete', [$datosStand->id]) !!}" onclick="return confirm('Are you sure wants to delete this datos_stand?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
