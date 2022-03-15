<div class="card">
            <div class="card-header">
            {!! Form::label('name', 'Nombre:') !!}
                <input wire:model="search" class="form-control" placeholder="Busqueda...">
                {!! Form::close() !!}
            </div>
    @if ($posts->count())
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
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width="10px">
                            <a class="btn btn-outline-warning" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.posts.destroy', $post)}}" method="POST"
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

        <div class="card-footer">
            <div class="pagination justify-content-end">
                    {{ $posts->links() }}
            </div>
        </div>
    @else
    <div class="card-body">
    <strong>Sin resultados...</strong>
    </div>
    @endif
</div>
