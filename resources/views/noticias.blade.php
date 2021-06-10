@extends('layouts.app')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-9">
            <h1>Noticias</h1>
            @foreach ($noticias as $item)
            <div class="row bg-light align-items-center">
                <div class="col-sm-5">
                    <img src="/img/noticias/{{$item->urlfoto}}" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="col-sm-7">
                    <h2><a href="/noticias/{{$item->slug}}">{{$item->titulo}}</a></h2>
                    <p>{{$item->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-sm-3 bg-light p-0">
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