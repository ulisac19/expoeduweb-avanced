<table class="table">
    <thead>
    <th>Nombre</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($pais as $pais)
        <tr>
            <td>{!! $pais->nombre !!}</td>
            <td>
                <a href="{!! route('pais.edit', [$pais->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('pais.delete', [$pais->id]) !!}" onclick="return confirm('Are you sure wants to delete this pais?')"><i class="glyphicon glyphicon-remove"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
