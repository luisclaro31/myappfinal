<table class="table table-responsive" id="jornadas-table">
    <thead>
        <th>Codigo</th>
        <th>Jornada</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($jornadas as $jornada)
        <tr>
            <td>{!! $jornada->codigo !!}</td>
            <td>{!! $jornada->jornada !!}</td>
            <td>
                {!! Form::open(['route' => ['jornadas.destroy', $jornada->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jornadas.show', [$jornada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jornadas.edit', [$jornada->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>