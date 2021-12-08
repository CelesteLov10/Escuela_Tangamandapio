<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    //
   public function index(){
       $alumnos = Alumno::paginate(10);
       return view('index')->with('alumnos',$alumnos);
   }

   public function show($id){
       $alumno = Alumno::findOrFail($id);
       return view('alumnoIndividual')->with('alumno',$alumno);
   }

   public function create(){
       return view('alumnoNuevo');
   }

   public function store(Request $request){
       //validacion
       $request->validate([
           'nombre'=>'required',
           'apellido'=>'required',
           'grado'=>'numeric|min:0|max:6',
           'identidad'=>'required|unique:alumnos,identidad',
           'fecha_nacimiento'=>'required',
           
       ]);
       $nuevoAlumno = new Alumno();

       $nuevoAlumno->grado_id = $request->input('grado_id');
       $nuevoAlumno->alumno_id = $request->input('alumno_id');
       $nuevoAlumno->nombre = $request->input('nombre');
       $nuevoAlumno->apellido = $request->input('apellido');
       $nuevoAlumno->identidad = $request->input('identidad');
       $nuevoAlumno->fecha_nacimiento = $request->input('fecha_nacimiento');
       $nuevoAlumno->direccion = $request->input('direccion');

       $creado = $nuevoAlumno->save();

       if($creado){
           return redirect()->route('alumno.index')
           ->with('mensaje', 'El Alumno se creo exitosamente');
       }else{
           //retornar menssaje de error
       }

   }//fin function store

   public function edit($id){
       $alumno = Alumno::findOrFail($id);
       return view('alumnoNuevoEditar')
       ->with('alumno', $alumno);
   }

   public function update(Request $request, $id){
       $alumno = Alumno::findOrFail($id);

       $request->validate([
           'grado_id'=>'required|numeric|min:0|max:6',
           'nombre'=>'required',
           'apellido'=>'required',
           'identidad'=>'required',
           'fecha_nacimiento'=>'required',
           'direccion'=>'required'
       ]);

       $alumno->grado_id = $request->input('grado_id');
       $alumno->alumno_id = $request->input('alumno_id');
       $alumno->nombre = $request->input('nombre');
       $alumno->apellido = $request->input('apellido');
       $alumno->identidad = $request->input('identidad');
       $alumno->fecha_nacimiento = $request->input('fecha_nacimiento');
       $alumno->direccion = $request->input('direccion');
       
       $creado = $alumno->save();

       if($creado){
           return redirect()->route('alumno.index')
           ->with('mensaje','El Alumno fue modificado exitosamente');
       }else{
           //return
       }
   }//fin function update

   public function destroy($id){
       Alumno::destroy($id);
       return redirect('/alumnos/')->with('mensaje','Alumno Eliminado exitosamente');
   }
}
