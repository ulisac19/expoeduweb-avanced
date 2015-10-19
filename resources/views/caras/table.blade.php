<table class="table">
    <thead>
    <th>Numero</th>
			<th>Parte Tipo Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($caras as $cara)
        <tr>
            <td>{!! $cara->numero !!}</td>
			<td>{!! $cara->parte_tipo_id !!}</td>
            <td>
                <a href="{!! route('caras.edit', [$cara->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('caras.delete', [$cara->id]) !!}" onclick="return confirm('Are you sure wants to delete this cara?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
