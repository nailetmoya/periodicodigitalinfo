@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>Listado de Etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @can('admin.tags.create')
    <div class="card-header text-right">
            <a class="btn btn-outline-primary" href="{{route('admin.tags.create')}}">Nueva Etiqueta</a>
        </div>
    @endcan
    <div class="card">
       
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{$tag->name}}</td>
                            @can('admin.tags.edit')
                                <td width="10px">
                                    <a class="btn btn-outline-warning" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                                </td>
                            @endcan
                            @can('admin.tags.destroy')
                                <td width="10px">
                                    <form action="{{route('admin.tags.destroy',$tag)}}" method="POST" onsubmit="return confirm('Eliminar?')" style="display: inline-block;">

                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
   
@stop