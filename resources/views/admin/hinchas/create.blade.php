@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.partials.sidebar')
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">HINCHAS » CREACIÓN</h1>
        {!! Form::open(['route'=>'admin.hinchas.store','method'=>'POST','files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','Descripción') !!}
                {!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
                <script>CKEDITOR.replace("descripcion");</script>
            </div>
            <div class="form-group">
                {!! Form::label('urlfoto','FOTO') !!}
                {!! Form::file('urlfoto',['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('urlfoto2','FOTO jpg') !!}
                {!! Form::file('urlfoto2',['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('tipo','Iipo: 0,1,2...') !!}
                {!! Form::text('tipo',null,['class'=>'form-control','placeholder'=>'tipo','required']) !!}
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
