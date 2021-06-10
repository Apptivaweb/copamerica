@extends('layouts.appadmin')
@section('content')
<div class="container">  
    <div class="row">
        @include('admin.partials.sidebar')  
        <div class="col-md-10">            
            <h1 class="lead bg-primary text-white p-3">CATEGORIAS</h1>
            <a href="{{ route('admin.categorias.create') }}" class="btn btn-success"> Crear</a>
            @if(count($categorias))
                <table class="table table-striped">
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Accion</th>
                    </tr>
                    @foreach ($categorias as $r)
                    <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->nombre }}</td>
                    <td>{{ $r->descripcion }}</td>
                    <td>                                
                        <a class="btn btn-success" href="{{ route('admin.categorias.edit',$r->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.categorias.destroy', $r->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Eliminar', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                </table>                        
            @else
                <p>No hay categorias</p>
            @endif
        </div>         
    </div>
</div>
@endsection
