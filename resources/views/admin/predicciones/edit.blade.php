@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row"> 
        @include('admin.partials.sidebar')  
        <div class="col-10">
            <h1 class="lead bg-primary text-white p-3">PREDICCIONES » EDICIÓN</h1>            
            {!! Form::open(['route'=>['admin.predicciones.update',$prediccion],'method'=>'PUT','files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('equipos_id','Nombre') !!}
                {!! Form::select('nombre',$equipos,$prediccion->equipos_id,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tema','TEMA') !!}
                {!! Form::text('tema',$prediccion->tema,['class'=>'form-control','required']) !!}                
            </div>
           


                <div class="form-group">
                    <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                    {{ Form::submit('EDITAR',['class'=>'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
