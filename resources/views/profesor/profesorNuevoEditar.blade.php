@extends('plantillas.plantilla')

@section('titulo','Profesor Editar')

@section('contenido')

<h1>Profesores </h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
  </ul>
</div>
@endif

<form class="mx-3" action="{{route('profesor.update', ['id'=>$profesor->id])}}" method="post">
 @method('put')
  @csrf  
  <div class="form-group">
   <label for="grado_id">Grado Id</label>
    <input type="number" class="form-control" name="grado_id" id="grado_id" 
    placeholder=" 0 - 6" value="{{$profesor->grado_id}}">
  </div>
  <div class="form-group">
   <label for="profesor_id">Profesor Id</label>
    <input type="number" class="form-control" name="profesor_id" id="profesor_id" 
    placeholder=" 0 - 6" value="{{$profesor->profesor_id}}">
  </div>

   <div class="form-group">
   <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" 
    placeholder="Nombre del profesor" value="{{$profesor->nombre}}">
  </div>

  <div class="form-group">
   <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" 
    placeholder="Apellido del profesor" value="{{$profesor->apellido}}">
  </div>

  <div class="form-group">
   <label for="identidad">Identidad</label>
    <input type="text" class="form-control" name="identidad" id="identidad" 
    placeholder="0000-0000-00000" value="{{$profesor->identidad}}">
  </div>

  <div class="form-group">
   <label for="clase">Clase</label>
    <input type="text" class="form-control" name="clase" id="clase" 
    placeholder="Nombre de la clase" value="{{$profesor->clase}}">
  </div>

  <div class="form-group">
   <label for="telefono">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" 
    placeholder="Telefono del profesor" value="{{$profesor->telefono}}">
  </div>

  <button class="btn btn-primary mt-10" type="submit">Guardar</button>
  <input type="reset" class="btn btn-danger">

</form>
@endsection