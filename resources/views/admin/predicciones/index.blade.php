@extends('layouts.appadmin')
@section('content')
<div class="container">  
    <div class="row">
        @include('admin.partials.sidebar')  
        <div class="col-md-10">            
            <h1 class="lead bg-primary text-white p-3">PREDICCIONES</h1>
            <a href="{{ route('admin.predicciones.create') }}" class="btn btn-success"> Crear</a>
            @if(count($predicciones))
                <table class="table table-striped">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Grupo</th>
                        <th>Accion</th>
                    </tr>
                    @foreach ($predicciones as $r)
                    <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->equipos->nombre }} {{$r->votos}}</td>
                    <td>{{ $r->tema }}</td>
                    <td>                                
                        <a class="btn btn-success" href="{{ route('admin.predicciones.edit',$r->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.predicciones.destroy', $r->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                </table>                        
            @else
                <p>No hay predicciones</p>
            @endif
        </div>         
    </div>
</div>
@endsection
