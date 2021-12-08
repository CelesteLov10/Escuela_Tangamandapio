@extends('plantillas.plantilla')

@section('titulo','Grado Editar')

@section('contenido')

<h1>Modificar Grados</h1>

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach
  </ul>
</div>
@endif

<form class="mx-3" action="{{route('grado.update', ['id'=>$grado->id])}}" method="post">
 @method('put')
  @csrf  
  <div class="form-group">
   <label for="profesor_id">Profesor Id</label>
    <input type="number" class="form-control" name="profesor_id" id="profesor_id" 
    placeholder="1-6" value="{{$grado->profesor_id}}">
  </div>

   <div class="form-group">
   <label for="alumno_id">Alumno Id</label>
    <input type="number" class="form-control" name="alumno_id" id="alumno_id" 
    placeholder="1-6" value="{{$grado->alumno_id}}">
  </div>
  <div class="form-group">
   <label for="grado_id">Grado Id</label>
    <input type="number" class="form-control" name="grado_id" id="grado_id" 
    placeholder="1-6" value="{{$grado->alumno_id}}">
  </div>

  <div class="form-group">
   <label for="nombre_clase">Nombre de la Clase</label>
    <input type="text" class="form-control" name="nombre_clase" id="nombre_clase" 
    placeholder="Nombre de la clase" value="{{$grado->nombre_clase}}">
  </div>

  <div class="form-group">
   <label for="jornada">Jornada</label>
    <input type="text" class="form-control" name="jornada" id="jornada" 
    placeholder="matutina o vespertina" value="{{$grado->jornada}}">
  </div>
  <button class="btn btn-primary mt-10" type="submit">Guardar</button>
  <input type="reset" class="btn btn-danger">

</form>
@endsection