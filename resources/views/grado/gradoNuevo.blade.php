@extends('plantillas.plantilla')

@section('titulo','Grado Nuevo')

@section('contenido')

<h1>Grado </h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
  </ul>
</div>
@endif

<form class="mx-3" action="" method="post">
  @csrf  
  <div class="form-group">
   <label for="profesor_id">Profesor Id</label>
    <input type="number" class="form-control" name="profesor_id" id="profesor_id" placeholder=" 1-6">
  </div>

   <div class="form-group">
   <label for="alumno_id">Alumno Id</label>
    <input type="number" class="form-control" name="alumno_id" id="alumno_id" placeholder="1-6">
  </div>

  <div class="form-group">
   <label for="nombre_clase">Nombre de la Clase</label>
    <input type="text" class="form-control" name="nombre_clase" id="nombre_clase" placeholder="Nombre de la clase">
  </div>

  <div class="form-group">
   <label for="jornada">Jornada</label>
    <input type="text" class="form-control" name="jornada" id="jornada" placeholder="matutina o vespertina">
  </div>

  <button class="btn btn-primary mt-10" type="submit">Guardar</button>
  <input type="reset" class="btn btn-danger">

</form>
@endsection