@extends('plantillas.plantilla')

@section('titulo', 'Formulario del profesor')

@section('contenido')

<h1>Profesor</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="">
    @csrf
  
    <div class="form-group">
        <label for="grado_id">Numero del grado</label>
        <input type="number" class="form-control" name="grado_id" id="grado_id" placeholder="Numero del grado" >
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del profesor" >
    </div>

    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido del prfesor" >
    </div>

    <div class="form-group">
        <label for="identidad">Identidad</label>
        <input type="text" class="form-control" name="identidad" id="identidad" placeholder="0000-0000-00000" >
    </div>

    <div class="form-group">
        <label for="nota">Telefono</label>
        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="telefono" >
    </div>

   
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <input type="reset"class="btn btn-danger">
    <a class="btn btn-primary" href="{{route('profesor.index')}}">Volver</a>

</form>

@endsection