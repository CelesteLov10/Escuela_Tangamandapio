@extends('plantillas.plantilla')

@section('titulo','Profesor Individual')

@section('contenido')
<h1>Datos de {{$profesor->nombre}} {{$profesor->apellido}} </h1>
<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Grado</th>
      <th>{{$profesor->grado_id}}</th>
    </tr>
    <tr>
      <th scope="row">Profesor</th>
      <th>{{$profesor->profesor_id}}</th>
    </tr>
    <tr>
      <th scope="row">Nombre</th>
      <th>{{$profesor->nombre}}</th>
    </tr>
    <tr>
      <th scope="row">Apellido</th>
      <th>{{$profesor->apellido}}</th>
    </tr>
    
    <tr>
      <th scope="row">Identidad</th>
      <th>{{$profesor->identidad}}</th>
    </tr>
    <tr>
      <th scope="row">Clase</th>
      <th>{{$profesor->clase}}</th>
    </tr>
    <tr>
      <th scope="row">Telefono</th>
      <th>{{$profesor->telefono}}</th>
    </tr>
  </tbody>
</table>

<a class="btn btn-primary" href="{{route('profesor.index')}}">Regresar</a>
@endsection