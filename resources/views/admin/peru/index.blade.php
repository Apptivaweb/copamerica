@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">    
    @include('admin.partials.sidebar')  
    <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Perú</div>
                <div class="panel-body">
                        <a href="{{ route('admin.peru.create') }}" class="btn btn-info"> Crear</a>
                        <table class="table table-striped">
                            <tr>
                                <th>N°</th>
                                <th>Titulo</th>
                                <th>Accion</th>
                            </tr>
                            @foreach ($peru as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->titulo }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.peru.edit',$r->id) }}">Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.peru.destroy', $r->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-info']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        
                </div>
            </div>
    </div>
    </div>
</div>
@endsection