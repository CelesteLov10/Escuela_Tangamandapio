@extends('plantillas.plantilla')

@section('titulo','Principal')

@section('contenido')
<br>
@if (session('mensaje'))
<div class="alert alert-success">
   {{ session('mensaje') }}
</div>
@endif

<h1>Registro de Alumnos </h1>
{{$alumnos->links()}}

<form class="form-inline my-2 my-lg-5 mx-5">
      <label>Ingrese el nombre un alumno </label>
      <input class="form-control mr-sm-2" type="search" 
      placeholder="buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Identidad</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  @forelse($alumnos as $alumno)
    <tr>
      <th>{{$alumno->id}}</th>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->apellido}}</td>
      <td>{{$alumno->identidad}}</td>
      <td><a class="btn btn-info" href="{{route('alumno.mostrar', ['id'=> $alumno->id]) }}" >Ver</a></td>
      <td><a class="btn btn-warning" href="{{route('alumno.editar', ['id'=>$alumno->id]) }}">Modificar</a></td>
      <td><form method="post" action="{{route('alumno.borrar', ['id'=>$alumno->id])}}">
          @csrf
          @method('delete')
          <input type="submit" onclick="return confirm('Quieres eliminar a {{$alumno->nombre}}?')" value="Eliminar" class="btn btn-danger"></td>
    </tr>
    @empty
     <tr>
       <td col-span="4">No hay estudiantes</td>
     </tr>
  @endforelse
    
  </tbody>
</table>

@endsection