@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Roles de Usuarios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

        <div class="card-header text-right">
            <a class="btn btn-outline-primary" href="{{route('admin.roles.create')}}">Nuevo Rol</a>
        </div>
    <div class="card">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td width="10px">
                         <a class="btn btn-outline-warning" href="{{route('admin.roles.edit', $role)}}">Editar</a>
                     </td>
                     <td width="10px">
                          <form action="{{route('admin.roles.destroy', $role)}}" method="POST"
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
@stop

