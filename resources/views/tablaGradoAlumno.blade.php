@extends('plantillas.plantilla')

@section('titulo','tabla')

@section('contenido')
<br>
@if (session('mensaje'))
<div class="alert alert-success">
   {{ session('mensaje') }}
</div>
@endif

<h1>Tablas</h1>
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
      <th scope="col">Grado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Identidad</th>
    </tr>
  </thead>
  <tbody>
  @forelse($grados as $grado)
    <tr>
      <th>{{$grado->id}}</th>
      <td>{{$grado->nombre}}</td>
      <td>{{$grado->apellido}}</td>
      <td>{{$grado->identidad}}</td>
    @empty
     <tr>
       <td col-span="4">No hay estudiantes</td>
     </tr>
  @endforelse
    
  </tbody>
</table>

@endsection