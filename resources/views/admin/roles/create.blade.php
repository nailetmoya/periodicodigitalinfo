@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Crear Nuevo Rol</h1>
@stop

@section('content')
   <div class="card">
       <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store'])!!}
            
            @include('admin.roles.partials.form') 

            <div class="text-center">
                    {!! Form::submit('Crear Rol', ['class' => 'btn btn-outline-primary']) !!}
            </div>
            {!! Form::close() !!}
       </div>
   </div>
@stop

