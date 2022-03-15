@extends('adminlte::page')

@section('title', 'INFO')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')

        @if (session('info'))
        <div class="alert alert-success">
        <strong>{{(session('info'))}}</strong>
        </div>
        @endif 

    <div class="card">
            <div class="card-body">
                {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

                <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}

                @error('name')
                        <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug', 'readonly']) !!}

                @error('slug')
                        <span class="text-danger">{{$message}}</span>
                @enderror
                </div>

                <div class="text-center">
                {!! Form::submit('Actualizar', ['class' => 'btn btn-outline-primary']) !!}
                <a href="{{ route('admin.categories.create') }}" class="btn btn-outline-primary"> Nueva Categoria</a>
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