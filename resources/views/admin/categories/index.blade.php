@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Listado de Categorías</h1>
@stop

@section('content')


        
   
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

        <div class="card-header text-right">
            <a class="btn btn-outline-primary" href="{{route('admin.categories.create')}}">Nueva Categoría</a>
        </div>

    <div class="card">
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>

                </thead>
                
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->name}}</td>
                        <td width="10px">
                            <a class="btn btn-outline-warning" href="{{route('admin.categories.edit', $category)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST"
                            onsubmit="return confirm('Eliminar?')" style="display: inline-block;">
                            @csrf   
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger" > Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        
    </div>
@stop

