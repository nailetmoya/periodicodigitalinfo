@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>INFORMACIÓN UDO</h1>
@stop

@section('content')
    @livewire('admin.onlyinfos-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop