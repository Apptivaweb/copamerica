@extends('layouts.appadmin')
@section('content')
<div class="container bg-white">    
	<div class="row">
    	@include('admin.sidebar')
    	<div class="col-sm-10">
		<h1>NOTICIAS</h1>		
        <form method="post" action="{{ route('admin.noticias.update',$noticia->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">     
            <select name="tags[]" class="form-control select_tag" multiple>
                @foreach ($tags as $id => $nombre)
                    <option value="{{$id}}" 
                    @foreach ($mytags as $item)
                        @if ($item == $id) {{'selected="selected"'}} @endif 
                    @endforeach
                    >{{$nombre}}</option>
                @endforeach
            </select>
        </div>
		<div class="form-group">
            <label for="title">Title</label>
		    <input type="text" name='title' class='form-control' value="{{$noticia->title}}" required maxlength='67'>
		</div>		
        <div class="form-group">
            <label for="description">Description</label>
		    <textarea name='description' class='form-control' required maxlength='155'>{{$noticia->description}}</textarea>
		</div>		
        <div class="form-group">
            <label for="slug">Slug</label>
		    <input type="text" name='slug' class='form-control' required maxlength='100' value="{{$noticia->slug}}">
		</div>		
        <div class="form-group">
            <label for="titulo">Título</label>
		    <input type="text" name='titulo' class='form-control' value="{{$noticia->titulo}}" required maxlength="130">
		</div>               

        <div class="form-group">
            <script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
            <label for="descripcion">Descripción</label>
		    <textarea name='descripcion' class='form-control' required >{{$noticia->descripcion}}</textarea>
            <script>CKEDITOR.replace("descripcion");</script>
		</div>
        <div class="form-group">
            <label for="Foto">Foto: 850 x auto</label>
            <img src="/img/noticias/{{$noticia->urlfoto}}" class="img-fluid" alt="">
		    <input type="file" name='urlfoto' class='form-control'>
		</div>	
       		

        <div class="form-group">
            <input type="submit" name="btn" value="EDITAR" class="btn btn-success">
        </div>

		</form>
		</div>	
	</div>
</div>
          
<script src="{{ asset('js/jquery.min.js') }}"></script>    
<link href="{{ asset('css/chosen.css') }}" rel="stylesheet">    
<script src="{{ asset('js/chosen.jquery.js') }}"></script>    
<script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }            
        });
        $(".select_tag").chosen({        
            placeholder_text_multiple:'Seleccione',
            max_selected_options:5,
            search_contains:true,
            no_results_text:"no hay"
        })   
      })
</script>
@endsection
