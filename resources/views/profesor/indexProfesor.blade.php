@extends('plantillas.plantilla')

@section('titulo','Principal profesor')

@section('contenido')
<br>
@if (session('mensaje'))
<div class="alert alert-success">
   {{ session('mensaje') }}
</div>
@endif

<h1>Registro de profesores</h1>
{!!$profesors->links()!!}

<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Profesor Id</th>
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
      <th>{{$profesor->profesor_id}}</th>
      <th>{{$profesor->nombre}}</th>
      <th>{{$profesor->apellido}}</th>
      <td><a class="btn btn-info" href="{{route('profesor.mostrar', ['id'=> $profesor->id]) }}" >Ver</a></td>
      <td><a class="btn btn-warning" href="{{route('profesor.editar', ['id'=>$profesor->id]) }}">Modificar</a></td>
      <td><form method="post" action="{{route('profesor.borrar', ['id'=>$profesor->id])}}">
          @csrf
          @method('delete')
          <input type="submit" onclick="return confirm('Quieres eliminar a {{$profesor->nombre}}')" value="Eliminar" class="btn btn-danger"></td>
    </tr>
    @empty
     <tr>
       <td col-span="4">No hay profesores</td>
     </tr>
  @endforelse
    
  </tbody>
</table>

@endsection