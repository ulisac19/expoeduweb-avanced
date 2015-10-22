<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Obj</th>
			<th>Imagen</th>
			<th>Oclusion</th>
			<th>Url</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($publicidads as $publicidad)
        <tr>
            <td>{!! $publicidad->nombre !!}</td>
			<td>{!! $publicidad->obj !!}</td>
			<td>{!! $publicidad->imagen !!}</td>
			<td>{!! $publicidad->oclusion !!}</td>
			<td>{!! $publicidad->url !!}</td>
            <td>
                <a href="{!! route('publicidads.edit', [$publicidad->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('publicidads.delete', [$publicidad->id]) !!}" onclick="return confirm('Are you sure wants to delete this publicidad?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
