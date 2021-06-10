@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.partials.sidebar')
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">PREDICCIONES » CREACIÓN</h1>
        {!! Form::open(['route'=>'admin.predicciones.store','method'=>'POST','files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('equipos_id','Nombre') !!}
                {!! Form::select('nombre',$equipos,null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tema','TEMA') !!}
                {!! Form::text('tema',null,['class'=>'form-control','placeholder'=>'TEMA','required']) !!}                
            </div>
           

            <div class="form-group">
                <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                {{ Form::submit('CREAR',['class'=>'btn btn-success']) }}
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
