@extends('layouts.app')
@section('content')
<div class="container bg-white">
   <div class="row">
      <div class="col-sm-9">
         <h1 class="text-center pt-4 pb-4">TARJETAS DE HINCHA</h1>
         <p class="text-center">Apoya a tu equipo en la Copa América con una tarjeta de hincha</p>
         @if (count($hinchas))
            <div class="row">
            @foreach ($hinchas as $item)
               <div class="col-sm-6 text-center mb-5">
                  <div class="card">
                     <div class="card-body">
                        <a href="/hincha/{{$item->slug}}" class="text-decoration-none">
                           <img src="/img/hincha/{{$item->urlfoto}}" alt="{{$item->title}}" class="img-fluid">
                              <h2>{{$item->nombre}}</h2>
                              <p>Para hinchas de {{$item->nombre}}</p>
                           </a>
                           @foreach ($item->hinchasgenerados as $i)
                           <p>{{$i->nombre}} <span>{{$i->frase}}</span></p>
                           @endforeach
                     </div>
                  </div>
               </div>
            @endforeach 
            </div>
         @else
            <p class="text-center">Pronto publicaremos tarjetas de hincha</p>
         @endif
         
      </div>
      <div class="col-sm-3 bg-white p-0">
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