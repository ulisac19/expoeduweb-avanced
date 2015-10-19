<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Codigo</th>
			<th>Rgb</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($colors as $color)
        <tr>
            <td>{!! $color->nombre !!}</td>
			<td>{!! $color->codigo !!}</td>
			<td>{!! $color->rgb !!}</td>
            <td>
                <a href="{!! route('colors.edit', [$color->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('colors.delete', [$color->id]) !!}" onclick="return confirm('Are you sure wants to delete this color?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
