<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index(){
        $profesors = Profesor::paginate(10);
          return view('raizProfesor')->with('profesors', $profesors);
      }
      public function show($id){
        $profesor = Profesor::findOrFail($id);
        return view('profesorIndividual')->with('profesor',$profesor);
      }
      public function create(){
        return view('formularioProfesor');
      }
      public function store(Request $request){
        $nuevoprofesor = new Profesor();
  
        //VALIDAR
        $request -> validate([
          'grado_id'=>'required|numeric',
          'nombre'=>'required|alpha',
          'apellido'=>'required|alpha',
          'identidad'=>'required|unique:estudiantes,identidad',
          'telefono'=>'required|numeric'
        ]);
  
  
  
        //formulario
        $nuevoprofesor->grado_id = $request->input('grado_id');
        $nuevoprofesor->nombre = $request->input('nombre');
        $nuevoprofesor->apellido = $request->input('apellido');
        $nuevoprofesor->identidad = $request->input('identidad');
        $nuevoprofesor->telefono = $request->input('telefono');
       
      //salvamos
      $creado =  $nuevoprofesor->save();  
  
      if($creado){
        return redirect()->route('profesor.index')
        ->with('mensaje','El profesor fue creado exitosamente.');
      }//fin if
      else{
        //TODO Retorna con un mensaje de error.
     }//fin else
  
    }//fin function
    public function edit($id){
        $profesor = Profesor::findOrFail($id);
        return view('formularioEditarProfesor')->with('profesor',$profesor);
    }  
    public function update(Request $request, $id){
        $profesor = Profesor::findOrFail($id);
   //VALIDAR
   $request -> validate([
    'grado_id'=>'required|numeric|min:0|max:12',
    'nombre'=>'required|alpha',
    'apellido'=>'required|alpha',
    'identidad'=>'required|unique:estudiantes,identidad',
    'telefono'=>'required|numeric'
  ]);



  //formulario
  $profesor->grado_id = $request->input('grado_id');
  $profesor->nombre = $request->input('nombre');
  $profesor->apellido = $request->input('apellido');
  $profesor->identidad = $request->input('identidad');
  $profesor->telefono = $request->input('telefono');
 
//salvamos
$creado =   $profesor->save();  

if($creado){
  return redirect()->route('profesor.index')
  ->with('mensaje','El profesor fue creado exitosamente.');
}//fin if
else{
  //TODO Retorna con un mensaje de error.
}//fin else

    }
    public function destroy($id){
        Estudiante::destroy($id);
        
          //Redirigir
          return redirect('/profesors/')->with('mensaje', 'Profesor borrado completamente');
      }
      
}

