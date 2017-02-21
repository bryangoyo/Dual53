<!-- Idoferta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idOferta', 'Idoferta:') !!}
    {!! Form::text('idOferta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ofertaAlumnos.index') !!}" class="btn btn-default">Cancel</a>
</div>
