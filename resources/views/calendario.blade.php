@extends('layouts.app')
@section('title')Calendario de la Copa América 2020, conoce los detalles del Fixture  @endsection
    @section('description')Entérate de las fechas y hora, partidos y sedes de cada encuentro de la Copa América Argentina Colombia 2020 @endsection
    @section('keywords') Partidos, fechas, calendario  @endsection
    @section('link'){{url('/calendario') }} @endsection
    @section('image'){{url('/img/calendarios.jpg') }} @endsection
@section('content')
<img src="img/copa-america-2020.jpg" alt="Copa América Colombia Argentina 2020" class="img-fluid">
<h1 class="text-center display-4">FIXTURE DE LA COPA AMÉRICA 2020</h1>
<p class="text-center h1">Calendario del torneo Argentina 2020 Colombia</p>
@endsection