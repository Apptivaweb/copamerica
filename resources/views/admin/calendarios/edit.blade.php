@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row"> 
        @include('admin.partials.sidebar')  
        <div class="col-10">
        {{$calendario}}
            <h1 class="lead bg-primary text-white p-3">CALENDARIOS » EDICIÓN</h1>            
            {!! Form::open(['route'=>['admin.calendarios.update',$calendario],'method'=>'PUT','files'=>'true']) !!}
            <div class="form-group">
                {!! Form::label('fecha','FECHA') !!}
                {!! Form::text('fecha',$calendario->fecha,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('mes','mes') !!}
                {!! Form::text('mes',$calendario->mes,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('dia','dia') !!}
                {!! Form::text('dia',$calendario->dia,['class'=>'form-control','required']) !!}
            </div>           
            <div class="form-group">
                {!! Form::label('hora','HORA') !!}
                {!! Form::time('hora',$calendario->hora,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('equipos1_id','Equipo A') !!}
                {!! Form::select('equipos1_id',$equipos,$calendario->equipos1_id,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('equipos2_id','Equuipo B') !!}
                {!! Form::select('equipos2_id',$equipos,$calendario->equipos2_id,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
            </div>

                <div class="form-group">
                    {!! Form::label('descripcion','Descripción') !!}
                    {!! Form::textarea('descripcion',$calendario->descripcion,['class'=>'form-control','placeholder'=>'Descripción de la categooria']) !!}
                    <script>CKEDITOR.replace("descripcion");</script>
                </div>
                
               
                <div class="form-group">
                    {!! Form::label('urlfoto','Foto') !!}
                    <img src="/img/calendarios/{{$calendario->urlfoto}}" class="img-fluid">
                    {!! Form::file('urlfoto',['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('urlfoto2','Foto JPG') !!}
                    <img src="/img/calendarios/{{$calendario->urlfoto2}}" class="img-fluid">
                    {!! Form::file('urlfoto2',['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                {!! Form::label('tipo','TIPO 1:2:3') !!}
                {!! Form::text('tipo',$calendario->tipo,['class'=>'form-control','required']) !!}
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
