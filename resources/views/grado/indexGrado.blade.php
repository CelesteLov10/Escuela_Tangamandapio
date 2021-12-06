@extends('plantillas.plantilla')

@section('titulo','Principal Grado')

@section('contenido')
<br>
@if (session('mensaje'))
<div class="alert alert-success">
   {{ session('mensaje') }}
</div>
@endif

<h1>Registro de Grados</h1>
{!!$grados->links()!!}

<form class="form-inline my-2 my-lg-5 mx-5">
      <label>Ingrese el nombre un alumno </label>
      <input class="form-control mr-sm-2" type="search" 
      placeholder="buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Grado Id</th>
      <th scope="col">Nombre clase</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  @forelse($grados as $grado)
    <tr>
      <th>{{$grado->id}}</th>
      <td>{{$grado->nombre_clase}}</td>
      <td><a class="btn btn-info" href="{{route('grado.mostrar', ['id'=> $grado->id]) }}" >Ver</a></td>
      <td><a class="btn btn-warning" href="{{route('grado.editar', ['id'=>$grado->id]) }}">Modificar</a></td>
      <td><form method="post" action="{{route('grado.borrar', ['id'=>$grado->id])}}">
          @csrf
          @method('delete')
          <input type="submit" onclick="return confirm('Quieres eliminar a {{$grado->nombre_clase}}?')" value="Eliminar" class="btn btn-danger"></td>
    </tr>
    @empty
     <tr>
       <td col-span="4">No hay Grados</td>
     </tr>
  @endforelse
    
  </tbody>
</table>

@endsection