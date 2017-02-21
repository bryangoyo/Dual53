<table class="table table-responsive" id="ofertas-table">
    <thead>
        <th>Id Empresa</th>
        <th>Dataentrada</th>
        <th>Descoferta</th>
        <th>Descofertabreu</th>
        <th>Id Sector</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($ofertas as $oferta)
        <tr>
            <td>{!! $oferta->id_empresa !!}</td>
            <td>{!! $oferta->dataEntrada !!}</td>
            <td>{!! $oferta->DescOferta !!}</td>
            <td>{!! $oferta->DescOfertaBreu !!}</td>
            <td>{!! $oferta->id_sector !!}</td>
            <td>
                {!! Form::open(['route' => ['ofertas.destroy', $oferta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ofertas.show', [$oferta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ofertas.edit', [$oferta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>