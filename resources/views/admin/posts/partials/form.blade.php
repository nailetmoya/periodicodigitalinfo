<div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Publicación']) !!}
            
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => '...', 'readonly']) !!}
            
                @error('slug')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            
                @error('category_id')
                 <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Etiquetas:</p>
                    @foreach ($tags as $tag)
                        <label class="mr-2">
                        {!! Form::checkbox('tags[]', $tag->id, null) !!}
                        {{$tag->name}}
                        </label>
                    @endforeach
                    @error('tags')
                        <br>
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
            </div>


                 <div class="form-group">
                    <p class="font-weight-bold">Estado</p>
                        <label class="mr-2">
                            {!! Form::radio('status', 1, true) !!}
                            Borrador
                        </label>
                        <label class="mr-2">
                            {!! Form::radio('status', 2) !!}
                            Publicación
                        </label>
                        @error('status')
                            <br>
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                </div>

            <div class="row mb-3">
                    <div class="col">
                    <div class="image-wrapper">
                        @isset ($post->image)
                            <img id="postpicture" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                            <img id="postpicture" src="https://cdn.pixabay.com/photo/2016/02/01/00/56/news-1172463_960_720.jpg" alt="">
                        @endisset

                   </div>
               </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'Imagen para el post') !!}
                        {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                        @error('file')
                            <small class="text-danger">{{ "El archivo debe ser de tipo imagen" }}</small>
                        @enderror
                    </div>

                    <p>Seleccione la imagen para su publicacion. en caso de no seleccionar ninguna se le pondra una imagen por defecto.</p>
                </div>
            </div>


            <div class="form-group">
            {!! Form::label('extract', 'Exctracto:') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                @error('extract')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
            {!! Form::label('body', 'Contenido de la Publicación') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>