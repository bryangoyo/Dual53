<table class="table table-responsive" id="industrias-table">
    <thead>
        <th>Nombre</th>
        <th>Cif</th>
        <th>Direccion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($industrias as $industria)
        <tr>
            <td>{!! $industria->nombre !!}</td>
            <td>{!! $industria->cif !!}</td>
            <td>{!! $industria->direccion !!}</td>
            <td>
                {!! Form::open(['route' => ['industrias.destroy', $industria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('industrias.show', [$industria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('industrias.edit', [$industria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>