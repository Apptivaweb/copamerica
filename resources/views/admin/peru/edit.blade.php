@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">        
        @include('admin.partials.sidebar')  
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">PERÚ » EDIT</h1>
        {!! Form::open(['route'=>['admin.peru.update',$peru],'method'=>'PUT' ,'files'=>true]) !!}
        <div class="form-group">
                {!! Form::label('mtitulo','mTìtulo') !!}
                {!! Form::text('mtitulo',$peru->mtitulo,['class'=>'form-control','placeholder'=>'titulo','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mdescripcion','Descripción') !!}
                {!! Form::text('mdescripcion',$peru->mdescripcion,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('titulo','Tìtulo') !!}
                {!! Form::text('titulo',$peru->titulo,['class'=>'form-control','placeholder'=>'titulo','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','Descripción') !!}
                {!! Form::textarea('descripcion',$peru->descripcion,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
                
            </div>
            <div class="form-group">
                {!! Form::label('urlvideo','CODIGO DEL VIDEO') !!}
                {!! Form::text('urlvideo',$peru->urlvideo,['class'=>'form-control','placeholder'=>'videos']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('urlfoto','FOTO') !!}
                <img src="/img/noticias/{{$peru->urlfoto}}" alt="">
                {!! Form::file('urlfoto',['class'=>'form-control'])!!}
            </div>         
            
            <div class="form-group">
                <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                {{ Form::submit('EDIT',['class'=>'btn btn-success']) }}                
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
