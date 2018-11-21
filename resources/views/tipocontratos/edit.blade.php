@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipocontrato
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipocontrato, ['route' => ['tipocontratos.update', $tipocontrato->id], 'method' => 'patch']) !!}

                        @include('tipocontratos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection