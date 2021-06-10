@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-9 bg-light">
            <form method="post" action="{{ route('admin.noticias.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <select name="tags[]" id="" class="form-control select_tag" multiple>
                        @foreach ($tags as $id => $nombre)
                            <option value="{{$id}}">{{$nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name='title' class='form-control' placeholder='67' required maxlength='67'>
                </div>		
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name='description' class='form-control' placeholder='155' required maxlength='155'></textarea>
                </div>		
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name='slug' class='form-control' required maxlength='100'>
                </div>		
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name='titulo' class='form-control' placeholder='130' required maxlength='130'>
                </div>               
        
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name='descripcion' class='form-control'  required ></textarea>
                    <script>CKEDITOR.replace("descripcion");</script>
                </div>
                <div class="form-group">
                    <label for="Foto">Foto: 850 x auto</label>
                    <input type="file" name='urlfoto' class='form-control'>
                </div>	
                
        
                <div class="form-group">
                    <input type="submit" name="btn" value="GUARDAR" class="btn btn-success">
                </div>
        
                </form>
  
                
            
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

        </div>
    </div>
</div>
@endsection