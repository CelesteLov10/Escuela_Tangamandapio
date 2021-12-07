@extends('plantillas.plantilla')

@section('titulo','Formulario')

@section ('contenido')

    <h1>Nuevo Profesor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form  action="{{ route( 'profesor.edit', ['id'=>$profesor->id]) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">

        <label for="grado_id">Numero del grado</label>
            <input type="text" class="form-control" name ="grado_id" id ="grado_id"
             placeholder="Numero del grado" value="{{$profesor->grado_id}}">
        </div>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name ="nombre" id ="nombre"
             placeholder="Nombre del profesor" value="{{$profesor->nombre}}">
        </div>

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name ="apellido" id="apellido"
             placeholder="profesor" value="{{$profesor->apellido}}">
        </div>

        <div class="form-group">
            <label for="identidad">Identidad</label>
            <input type="text" class="form-control" name ="identidad" id="identidad"
             placeholder="0000-0000-00000" value="{{$profesor->identidad}}">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name ="telefono" id="telefono"
             placeholder="Telefono" value="{{$profesor->telefono}}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="reset" class="btn btn-danger">
        <a class ="btn btn-primary" href="{{route('profesor.index')}}">Volver</a>



    </form>
@endsection
