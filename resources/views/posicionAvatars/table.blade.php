<table class="table">
    <thead>
    <th>X</th>
			<th>Y</th>
			<th>Z</th>
			<th>Rot</th>
			<th>Action</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($posicionAvatars as $posicionAvatar)
        <tr>
            <td>{!! $posicionAvatar->x !!}</td>
			<td>{!! $posicionAvatar->y !!}</td>
			<td>{!! $posicionAvatar->z !!}</td>
			<td>{!! $posicionAvatar->rot !!}</td>
			<td>{!! $posicionAvatar->action !!}</td>
            <td>
                <a href="{!! route('posicionAvatars.edit', [$posicionAvatar->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('posicionAvatars.delete', [$posicionAvatar->id]) !!}" onclick="return confirm('Are you sure wants to delete this posicion_avatar?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
