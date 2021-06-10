@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="card border-0">
    <img class="card-img" src="img/copa-america-2020.jpg" alt="Copa América Colombia Argentina 2020">
    <div class="card-img-overlay row text-center justify-content-center">
        <div class="align-self-center">
            <a href="/simulador" class="btn btn-outline-light rounded-pill pl-4 pr-4">PREDICCIONES DE LA COPA</a>
        </div>
    </div>
</div>
</div>
<div class="container">
    <h1 class="h4 text-center pt-5 pb-5">SIMULADOR COPA AMÉRICA</h1>
    <p class="text-center">Información del torneo Argentina 2020 Colombia</p>
    <div class="row">
        <div class="col-sm-8">
        @if(!empty($noticias))
            <h2 class="text-primary pt-3">Últimas noticias</h2>
            <p class="small">Entérate de los acontecimientos más importantes de esta fiesta del fútbol</p>
            @foreach($noticias as $r)
            <div class="row align-items-center mb-4 bg-light m-1">
                <div class="col-sm-5">
                    <div class="row">
                    <a href="/noticias/{{$r->slug}}" title="{{$r->title}}">
                        <img src="/img/noticias/{{$r->urlfoto}}" alt="{{$r->title}}" title="{{$r->title}}" class="img-fluid">
                    </a>
                    </div>
                </div>
                <div class="col-sm-7 text-white">
                    <h5 class="h4"><a href="/noticias/{{$r->slug}}" title="{{$r->title}}">{{$r->titulo}}</a></h5>                        
                    <p class="small text-right text-success">   Visitas: {{$r->visitas}} Publicación {{$r->created_at->diffForHumans()}}</p>
                </div>
            </div>    
            @endforeach            
        @else
            <p>NO HAY CATEGORIA</p>
        @endif

        </div>
        
    </div>

</div>
@endsection