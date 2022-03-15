<div>
         
      @if($onlyinfos->count())  
          <div class="card">
          <div class="card-header">
              {!! Form::label('name', 'Nombre:') !!}
                  <input wire:model="search" class="form-control" placeholder="Busqueda...">
                  {!! Form::close() !!}
              </div>
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
                          @foreach($onlyinfos as $onlyinfo)
                          <tr>
                              <td>{{$onlyinfo->id}}</td>
                              <td>{{$onlyinfo->name}}</td>
                              <td width="10px">
                                  <a class="btn btn-outline-warning" href="{{route('admin.onlyinfos.edit', $onlyinfo)}}">Editar</a>
                              </td>
                              <td width="10px">
                                  <form action="{{route('admin.onlyinfos.destroy', $onlyinfo)}}" method="POST"
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

          <card class="footer">
              {{$onlyinfos->links()}}
          </card>
      @else
         <div class="card-body">
            <strong>No hay registros...</strong>
           </div>  
      @endif  

</div>


