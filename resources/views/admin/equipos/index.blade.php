@extends('layouts.appadmin')
@section('content')
<div class="container">
    <div class="row">    
    @include('admin.partials.sidebar')  
    <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">EQUIPOS</div>
                <div class="panel-body">
                        <a href="{{ route('admin.equipos.create') }}" class="btn btn-info"> Crear</a>
                        <table class="table table-striped">
                            <tr>
                                <th>N°</th>
                                <th>Nombre</th>
                                <th>Accion</th>
                            </tr>
                            @foreach ($equipos as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->nombre }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('admin.equipos.edit',$r->id) }}">Editar</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.equipos.destroy', $r->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-info']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        {!! $equipos->render() !!}
                </div>
            </div>
    </div>
    </div>
</div>
@endsection