@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Listado de Publicaciones</h1>
        
@stop

@section('content')

      
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    
        <div class="card-header text-right">
            <a class="btn btn-outline-primary" href="{{route('admin.posts.create')}}">Nueva Publicación</a>
        </div>
        
   @livewire('admin.posts-index')

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop