<table class="table table-responsive" id="tipocontratos-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tipocontratos as $tipocontrato)
        <tr>
            <td>{!! $tipocontrato->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipocontratos.destroy', $tipocontrato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipocontratos.show', [$tipocontrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipocontratos.edit', [$tipocontrato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>