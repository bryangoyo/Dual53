<!-- Test Field -->
<div class="form-group col-sm-6">
    {!! Form::label('test', 'Test:') !!}
    {!! Form::text('test', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num', 'Num:') !!}
    {!! Form::text('num', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('testings.index') !!}" class="btn btn-default">Cancel</a>
</div>
