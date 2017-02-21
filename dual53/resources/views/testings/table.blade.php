<table class="table table-responsive" id="testings-table">
    <thead>
        <th>Test</th>
        <th>Num</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($testings as $testing)
        <tr>
            <td>{!! $testing->test !!}</td>
            <td>{!! $testing->num !!}</td>
            <td>
                {!! Form::open(['route' => ['testings.destroy', $testing->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('testings.show', [$testing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('testings.edit', [$testing->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>