@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.partials.sidebar')
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">CALENDARIO » CREACIÓN</h1>
        {!! Form::open(['route'=>'admin.calendarios.store','method'=>'POST','files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('fecha','FECHA') !!}
                {!! Form::date('fecha',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hora','HORA') !!}
                {!! Form::time('hora',null,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('equipos1_id','Equipo A') !!}
                {!! Form::select('equipos1_id',$equipos,null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('equipos2_id','Equuipo B') !!}
                {!! Form::select('equipos2_id',$equipos,null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion','Descripción') !!}
                {!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
                <script>CKEDITOR.replace("descripcion");</script>
            </div>
            <div class="form-group">
                {!! Form::label('tipo','TIPO 1:2:3') !!}
                {!! Form::text('tipo',null,['class'=>'form-control','required']) !!}
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
