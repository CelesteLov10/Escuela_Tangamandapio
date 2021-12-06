@extends('plantillas.plantilla')

@section('titulo','Grado Individual')

@section('contenido')
<h1>Datos del grado </h1>
<table class="table mx-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Profesor Id</th>
      <th>{{$grado->profesor_id}}</th>
    </tr>
    <tr>
      <th scope="row">Alumno Id</th>
      <th>{{$grado->alumno_id}}</th>
    </tr>
    <tr>
      <th scope="row">Nombre Clase</th>
      <th>{{$grado->nombre_clase}}</th>
    </tr>
    <tr>
      <th scope="row">Jornada</th>
      <th>{{$grado->jornada}}</th>
    </tr>
  
  </tbody>
</table>

<a class="btn btn-primary" href="{{route('grado.index')}}">Regresar</a>
@endsection