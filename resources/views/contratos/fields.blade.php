<!-- Numerocontrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numerocontrato', 'Numerocontrato:') !!}
    {!! Form::text('numerocontrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Horascontratada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horascontratada', 'Horascontratada:') !!}
    {!! Form::text('horascontratada', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechainicio', 'Fechainicio:') !!}
    {!! Form::date('fechainicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechafin', 'Fechafin:') !!}
    {!! Form::date('fechafin', null, ['class' => 'form-control']) !!}
</div>

<!-- Docente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('docente_id', 'Docente Id:') !!}
    {!! Form::select('docente_id', $docentes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('tipocontrato_id', 'tipocontrato_id:') !!}
    {!! Form::select('tipocontrato_id',$docentes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('jornadas_id', 'jornadas_id:') !!}
    {!! Form::select('jornadas_id', $docentes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('asignaturas_id', 'asignaturas_id:') !!}
    {!! Form::select('asignaturas_id', $docentes, null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contratos.index') !!}" class="btn btn-default">Cancel</a>
</div>
