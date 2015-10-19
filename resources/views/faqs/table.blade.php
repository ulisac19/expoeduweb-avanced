<table class="table">
    <thead>
    <th>Titulo</th>
			<th>Msj</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($faqs as $faq)
        <tr>
            <td>{!! $faq->titulo !!}</td>
			<td>{!! $faq->msj !!}</td>
            <td>
                <a href="{!! route('faqs.edit', [$faq->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="{!! route('faqs.delete', [$faq->id]) !!}" onclick="return confirm('Are you sure wants to delete this faq?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
