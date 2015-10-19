<table class="table">
    <thead>
    <th>Nombre</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($estados as $estado)
        <tr>
            <td>{!! $estado->nombre !!}</td>
            <td>
                <a href="{!! route('estados.edit', [$estado->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('estados.delete', [$estado->id]) !!}" onclick="return confirm('Are you sure wants to delete this estado?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
