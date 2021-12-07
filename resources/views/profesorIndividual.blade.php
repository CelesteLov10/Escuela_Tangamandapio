@extends('plantillas.plantilla')

@section('titulo', 'Profesor')

@section('contenido')
<h1>Detalle de {{$profesor->nombre}} {{$profesor->apellido}}</h1>
<a class="btn btn-warning " href="{{route('profesor.edit',['id'=>$profesor->id])}}">Editar</a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>


   <tr>
      <th scope="row">Numero del grado</th>
      <td>{{$profesor->grado_id}}</td>
    </tr>  
  <tr>
      <th scope="row">Nombre</th>
      <td>{{$profesor->nombre}}</td>
    </tr>

    <tr>
      <th scope="row">Apellido</th>
      <td>{{$profesor->apellido}}</td>
    </tr>

    <tr>
      <th scope="row">Telefono</th>
      <td>{{$profesor->telefono}}</td>
    </tr>

   
  </tbody>
</table>
<a class="btn btn-primary" href="{{route('profesor.index')}}">Volver</a>
<td>
      @csrf
        @method('delete')
          <input type="submit" onclick="return confirm('Quieres eliminar a {{$profesor->nombre}}')" value="Eliminar" class="btn btn-danger">
        </form>
      </td>
@endsection