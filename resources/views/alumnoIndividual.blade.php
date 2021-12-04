@extends('plantillas.plantilla')

@section('titulo','Alumno Individual')

@section('contenido')
<h1>Datos de {{$alumno->nombre}} {{$alumno->apellido}} </h1>
<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre</th>
      <th>{{$alumno->nombre}}</th>
    </tr>
    <tr>
      <th scope="row">Apellido</th>
      <th>{{$alumno->apellido}}</th>
    </tr>
    <tr>
      <th scope="row">Grado</th>
      <th>{{$alumno->grado_id}}</th>
    </tr>
    <tr>
      <th scope="row">Identidad</th>
      <th>{{$alumno->identidad}}</th>
    </tr>
    <tr>
      <th scope="row">Fecha de nacimiento</th>
      <th>{{$alumno->fecha_nacimiento}}</th>
    </tr>
    <tr>
      <th scope="row">Direccion</th>
      <th>{{$alumno->direccion}}</th>
    </tr>
  </tbody>
</table>

<a class="btn btn-primary" href="{{route('alumno.index')}}">Regresar</a>
@endsection