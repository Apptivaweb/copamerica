@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row"> 
        @include('admin.partials.sidebar')  
        <div class="col-10">
            <h1 class="lead bg-primary text-white p-3">CATEGORIAS » EDICIÓN</h1>            
            {!! Form::open(['route'=>['admin.categorias.update',$categorias],'method'=>'PUT','files'=>'true']) !!}
                <div class="form-group">
                    {!! Form::label('nombre','Nombre') !!}
                    {!! Form::text('nombre',$categorias->nombre,['class'=>'form-control','placeholder'=>'Nombre de la categooria','required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('descripcion','Descripción') !!}
                    {!! Form::textarea('descripcion',$categorias->descripcion,['class'=>'form-control','placeholder'=>'Descripción de la categooria']) !!}
                    <script>CKEDITOR.replace("descripcion");</script>
                </div>
                
                <div class="form-group">
                    {!! Form::label('metatitle','Meta Título 67') !!}
                    {!! Form::text('metatitle',$categorias->metatitle,['class'=>'form-control','placeholder'=>'67 caracteres','required','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('metadescription','Meta Descripción 155') !!}
                    {!! Form::textarea('metadescription',$categorias->metadescription,['class'=>'form-control','placeholder'=>'155 caracteres','required','maxlength'=>'155','rows'=>'3']) !!}                
                </div>
                <div class="form-group">
                    {!! Form::label('metakeywords','Metakeywords') !!}
                    {!! Form::text('metakeywords',$categorias->metakeywords,['class'=>'form-control','placeholder'=>'100 caracteres','required','maxlength'=>'100']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('urlfoto','Foto') !!}
                    <img src="/img/categorias/{{$categorias->urlfoto}}" class="img-fluid">
                    {!! Form::file('urlfoto',['class'=>'form-control'])!!}
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
