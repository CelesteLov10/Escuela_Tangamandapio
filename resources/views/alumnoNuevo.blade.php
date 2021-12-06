@extends('plantillas.plantilla')

@section('titulo','Alumno nuevo')

@section('contenido')

<h1>Alumnos </h1>

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
  @csrf  <!--DIRECTIVA BLADE AGREGA UN CAMPO OCULTO CON EL TOKEN-->
  <div class="form-group">
   <label for="grado_id">Grado</label>
    <input type="number" class="form-control" name="grado_id" id="grado_id" placeholder=" 0 - 6">
  </div>

   <div class="form-group">
   <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno">
  </div>

  <div class="form-group">
   <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido del alumno">
  </div>

  <div class="form-group">
   <label for="identidad">Identidad</label>
    <input type="text" class="form-control" name="identidad" id="identidad" placeholder="0000-0000-00000">
  </div>

  <div class="form-group">
   <label for="fecha_nacimiento">Fecha nacimiento</label>
    <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="##-##-##">
  </div>

  <div class="form-group">
   <label for="direccion">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Domicilio del alumno">
  </div>

  <button class="btn btn-primary mt-10" type="submit">Guardar</button>
  <input type="reset" class="btn btn-danger">

</form>
@endsection