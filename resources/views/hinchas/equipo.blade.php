@extends('layouts.app')
@section('title'){{$hincha->title}}  @endsection
@section('description'){{$hincha->description}} @endsection
@section('link'){{url('/hincha/'.$hincha->slug) }} @endsection
@section('image'){{url('/img/hincha/'.$hincha->urlfoto) }} @endsection
@section('content')
<div class="container bg-light">
   <div class="row">
      <div class="col-sm-9">
         <p><a href="/">Inicio</a> » <a href="/hincha">Hincha</a> » <a href="/hincha/{{$hincha->slug}}">{{$hincha->nombre}}</a> </p>
         <h1 class="text-center">Tarjeta {{$hincha->nombre}}</h1>
         <p>Apoya a tu equipo favorito con una tarjeta personalizada con tu nombre, tu frase de aliento y tu foto</p>

         @if (session()->has('urlfoto'))
            <img src="/img/hincha/a/{{ session()->get('urlfoto') }}" alt="" class="img-fluid">

             
         @else
            <form  method="post" enctype="multipart/form-data" >
               @csrf
               <div class="row bg-white justify-content-center">
                  <img src="/img/hincha/{{$hincha->urlfoto2}}" alt="{{$hincha->nombre}}" class="img-fluid img-thumbnail mx-auto d-block">
                  <div class="col-sm-4">
                     <label for="nombre">Nombre:</label>
                     <input type="text" name="nombre" class="form-control" required placeholder="Tu nombre" maxlength="10" min="3">
                  </div>
                  <div class="col-sm-4">
                     <label for="frase">Frase:</label>
                     <input type="text" name="frase" class="form-control" required placeholder="Tu frase de aliento" maxlength="20" minlength="10">
                  </div>
                  <input type="hidden" name="id" value="{{$hincha->id}}">
                  <div class="col-sm-4">
                     <label for="urlfoto">Sube tu foto:</label>
                     <input type="file" name="urlfoto" required class="form-control">
                  </div>
                  <div class="col-sm-12 text-center pt-5 pb-5">
                     <p class="lead text-center">Ahora haz click para generar tu tarjeta de hincha de tu equipo {{$hincha->nombre}}</p>
                     <input type="submit" class="btn btn-success" value="GENERAR TARJETA">
                  </div>
               </div>
            </form>
         @endif

         

         
         <div class="row justify-content-center mb-5">
            @if (!empty($hinchas))
            @foreach ($hinchas as $item)
            <div class="col-sm-4">
            <img src="/img/hincha/a/{{$item->urlfoto}}" alt="{{$item->nombre}}" class="img-fluid img-thumbnail">
            </div>
            @endforeach
            @endif
         </div>

         
         <div class="jumbotron text-center">
            <p><a href="/hinchas" title="Elegir otro equipo" class="btn btn-outline-success">Cambiar de equipo de fútbol</a></p>
         </div>

         
      </div>
      <div class="col-sm-3 bg-success p-0">
       <!-- apptivaweb adaptable -->
       <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-9471603402378632"
       data-ad-slot="8938323702"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
       <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
       </script>
      </div>
   </div>

</div>
@endsection