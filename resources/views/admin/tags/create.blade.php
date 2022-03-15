@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')

       @if (session('info'))
        <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
        </div>
        @endif 

      <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.tags.store']) !!}

                  @include('admin.tags.partials.form')

                    <div class="text-center">
                    {!! Form::submit('Crear etiqueta', ['class' => 'btn btn-outline-primary']) !!}
                    </div>

                {!! Form::close() !!}
                
                
            </div>
        </div>    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection