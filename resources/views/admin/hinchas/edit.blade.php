@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row"> 
        @include('admin.partials.sidebar')  
        <div class="col-10">
            <h1 class="lead bg-primary text-white p-3">HINCHAS » EDICIÓN</h1>            
            {!! Form::open(['route'=>['admin.hinchas.update',$hinchas],'method'=>'PUT','files'=>'true']) !!}
                <div class="form-group">
                    {!! Form::label('nombre','Nombre') !!}
                    {!! Form::text('nombre',$hinchas->nombre,['class'=>'form-control','placeholder'=>'...','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('descripcion','Descripción') !!}
                    {!! Form::textarea('descripcion',$hinchas->descripcion,['class'=>'form-control','placeholder'=>'..']) !!}
                    <script>CKEDITOR.replace("descripcion");</script>
                </div>                    
                <div class="form-group">
                    {!! Form::label('tipo','Iipo: 0,1,2...') !!}
                    {!! Form::text('tipo',$hinchas->tipo,['class'=>'form-control','placeholder'=>'tipo','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('urlfoto','Foto') !!}
                    <img src="/img/hinchas/{{$hinchas->urlfoto}}" class="img-fluid">
                    {!! Form::file('urlfoto',['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('urlfoto2','Foto jpg') !!}
                    <img src="/img/hinchas/{{$hinchas->urlfoto2}}" class="img-fluid">
                    {!! Form::file('urlfoto2',['class'=>'form-control'])!!}
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
