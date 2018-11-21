
<!-- Codigo Field -->
<div class="form-group">
    {!! Form::label('codigo', 'Codigo:') !!}
    <p>{!! $docente->codigo !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $docente->nombre !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $docente->apellido !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $docente->email !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{!! $docente->telefono !!}</p>
</div>

<!-- Profesion Field -->
<div class="form-group">
    {!! Form::label('profesion_id', 'Profesion:') !!}
    <p>{!! $docente->profesions->nombre !!}</p>
</div>
