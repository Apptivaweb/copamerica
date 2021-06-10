@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row"> 
        @include('admin.partials.sidebar')         
        <div class="col-10">
        <h1 class="lead bg-primary text-white p-3">EQUIPOS » EDICIÓN</h1>
        {!! Form::open(['route'=>['admin.equipos.update',$equipo],'method'=>'PUT' ,'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('nombre','Tìtulo') !!}
                {!! Form::text('nombre',$equipo->nombre,['class'=>'form-control','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion','Descripción') !!}
                {!! Form::textarea('descripcion',$equipo->descripcion,['class'=>'form-control','required']) !!}
                <script>CKEDITOR.replace("descripcion");</script>
            </div>
            <div class="form-group">
                    {!! Form::label('metatitle','Meta Título 67') !!}
                    {!! Form::text('metatitle',$equipo->metatitle,['class'=>'form-control','placeholder'=>'67 caracteres','required','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('metadescription','Meta Descripción 155') !!}
                    {!! Form::textarea('metadescription',$equipo->metadescription,['class'=>'form-control','placeholder'=>'155 caracteres','required','maxlength'=>'155','rows'=>'3']) !!}                
                </div>
                <div class="form-group">
                    {!! Form::label('metakeywords','Metakeywords') !!}
                    {!! Form::text('metakeywords',$equipo->metakeywords,['class'=>'form-control','placeholder'=>'100 caracteres','required','maxlength'=>'100']) !!}
                </div>
            <div class="form-group">
                {!! Form::label('urlvideo','CODIGO DEL VIDEO') !!}
                {!! Form::text('urlvideo',$equipo->urlvideo,['class'=>'form-control','placeholder'=>'videos']) !!}
            </div>
            <div class="form-group">{!! Form::label('pj','pj') !!} {!! Form::text('pj',$equipo->pj,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('pg','pg') !!} {!! Form::text('pg',$equipo->pg,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('pe','pe') !!} {!! Form::text('pe',$equipo->pe,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('pp','pp') !!} {!! Form::text('pp',$equipo->pp,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('gf','gf') !!} {!! Form::text('gf',$equipo->gf,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('gc','gc') !!} {!! Form::text('gc',$equipo->gc,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('pts','pts') !!} {!! Form::text('pts',$equipo->pts,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('gd','gd') !!} {!! Form::text('gd',$equipo->gd,['class'=>'form-control']) !!}</div>
            <div class="form-group">{!! Form::label('grupo','grupo') !!} {!! Form::text('grupo',$equipo->grupo,['class'=>'form-control']) !!}</div>

            <div class="form-group">
                {!! Form::label('urlfoto','FOTO') !!}
                <img src="/img/equipos/{{$equipo->urlfoto}}" width="200">
                {!! Form::file('urlfoto',['class'=>'form-control'])!!}
            </div>
            
            
            <div class="form-group">
                <a href="javascript: history.go(-1)" class="btn btn-success">CANCELAR</a>
                {{ Form::submit('EDITAR',['class'=>'btn btn-success']) }}                
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
