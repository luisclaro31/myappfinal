<li class="{{ Request::is('profesions*') ? 'active' : '' }}">
    <a href="{!! route('profesions.index') !!}"><i class="fa fa-edit"></i><span>profesions</span></a>
</li>

<li class="{{ Request::is('docentes*') ? 'active' : '' }}">
    <a href="{!! route('docentes.index') !!}"><i class="fa fa-edit"></i><span>docentes</span></a>
</li>

<li class="{{ Request::is('tipocontratos*') ? 'active' : '' }}">
    <a href="{!! route('tipocontratos.index') !!}"><i class="fa fa-edit"></i><span>tipocontratos</span></a>
</li>

<li class="{{ Request::is('jornadas*') ? 'active' : '' }}">
    <a href="{!! route('jornadas.index') !!}"><i class="fa fa-edit"></i><span>jornadas</span></a>
</li>

<li class="{{ Request::is('contratos*') ? 'active' : '' }}">
    <a href="{!! route('contratos.index') !!}"><i class="fa fa-edit"></i><span>contratos</span></a>
</li>

