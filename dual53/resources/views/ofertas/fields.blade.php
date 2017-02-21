<!-- Id Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_empresa', 'Id Empresa:') !!}
    {!! Form::text('id_empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Dataentrada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dataEntrada', 'Dataentrada:') !!}
    {!! Form::text('dataEntrada', null, ['class' => 'form-control']) !!}
</div>

<!-- Descoferta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DescOferta', 'Descoferta:') !!}
    {!! Form::text('DescOferta', null, ['class' => 'form-control']) !!}
</div>

<!-- Descofertabreu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DescOfertaBreu', 'Descofertabreu:') !!}
    {!! Form::text('DescOfertaBreu', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Sector Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_sector', 'Id Sector:') !!}
    {!! Form::text('id_sector', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ofertas.index') !!}" class="btn btn-default">Cancel</a>
</div>
