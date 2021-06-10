@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-9 bg-light">
            <ul class="breadcrumb">
                <li><a href="{{route('admin.noticias.index') }}">noticias</a> </li>
            </ul>
            <div class="well">    
                <a href="{{ route('admin.noticias.create') }}" class="btn btn-info"> Nuevo</a>
                    @include('admin.mensaje')
                        <table class="table table-striped">
                            <tr>
                                <th>N°</th>                                
                                <th>NOMBRE</th>
                                <th>ACCIÓN</th>
                            </tr>
                            @foreach ($noticias as $key => $publicacion)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $publicacion->titulo }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.noticias.show',$publicacion->id) }}">Ver</a>
                                    <a class="btn btn-info" href="{{ route('admin.noticias.edit',$publicacion->id) }}">Editar</a>
                                </td>                                
                            </tr>
                            @endforeach
                        </table>
                    {!! $noticias->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection