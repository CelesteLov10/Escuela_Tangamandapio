@extends('plantillas.plantilla')

@section('titulo', 'Lista de los profesores')

@section('contenido')
<h1>Lista de los profesores <a class ="btn btn-primary" href="{{route('profesor.crear')}}">Nuevo</a></h1>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Numero del grado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
     
    </tr>
  </thead>
  <tbody>
      @forelse($profesors as $profesor)


      <tr>
      <th scope="row">{{$profesor->id}}</th>
      <td>{{$profesor->grado_id}}</td>
      <td>{{$profesor->nombre}}</td>
      <td>{{$profesor->apellido}}</td>
    
      <td> <a class="btn btn-info" href="{{ route('profesor.mostrar', ['id' => $profesor->id])}}">Ver</a></td>
      <td> <a class="btn btn-warning" href="{{ route('profesor.edit', ['id' => $profesor->id])}}">Editar</a></td>  
      <form method="post" action="{{route('profesor.borrar', ['id'=>$profesor->id])}}">
        
      <td>
      @csrf
        @method('delete')
          <input type="submit" onclick="return confirm('Quieres eliminar a {{$profesor->nombre}}')" value="Eliminar" class="btn btn-danger">
        </form>
      </td>

        </form>
      </td>

    
    </tr>
    @empty
      <tr>
          <td colspan="4">No hay profesores</td>
      </tr>
      @endforelse
    
  </tbody>
</table>

{!! $profesors->links() !!}


@endsection