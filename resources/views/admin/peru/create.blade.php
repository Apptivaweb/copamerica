@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">        
        @include('admin.partials.sidebar')  
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">PERÚ » CREACIÓN</h1>
        {!! Form::open(['route'=>'admin.peru.store','method'=>'POST','files'=>true]) !!}
        <div class="form-group">
                {!! Form::label('mtitulo','mTìtulo') !!}
                {!! Form::text('mtitulo',null,['class'=>'form-control','placeholder'=>'titulo','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mdescripcion','Descripción') !!}
                {!! Form::text('mdescripcion',null,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('titulo','Tìtulo') !!}
                {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'titulo','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','Descripción') !!}
                {!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
               
            </div>
            <div class="form-group">
                {!! Form::label('urlvideo','CODIGO DEL VIDEO') !!}
                {!! Form::text('urlvideo',null,['class'=>'form-control','placeholder'=>'videos']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('urlfoto','FOTO') !!}
                {!! Form::file('urlfoto',['class'=>'form-control'])!!}
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
