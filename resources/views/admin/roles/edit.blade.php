@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Editar Roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role],'method' => 'put']) !!}

                
             @include('admin.roles.partials.form') 

                <div class="text-center">
                {!! Form::submit('Actualizar Etiqueta', ['class' => 'btn btn-outline-primary']) !!}
                 <a href="{{ route('admin.roles.create') }}" class="btn btn-outline-primary"> Nuevo Rol</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

