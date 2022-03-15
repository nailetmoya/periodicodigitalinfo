<div>

    <div class="card">
            <div class="card-header">
                {!! Form::label('name', 'Nombre:') !!}
                    <input wire:model="search" class="form-control" placeholder="Busqueda...">
                    {!! Form::close() !!}
                </div>
                
                @if($users->count())  
         <div class="card-body">     
             <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a class="btn btn-outline-warning" href="{{route('admin.users.edit', $user)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.users.destroy', $user)}}" method="POST"
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
            
            <div class="card-footer">
            <div class="pagination justify-content-end">
                    {{ $users->links() }}
            </div>
        </div>
       @else
         <div class="card-body">
            <strong>No hay registros...</strong>
           </div>  
       @endif      
</div>
