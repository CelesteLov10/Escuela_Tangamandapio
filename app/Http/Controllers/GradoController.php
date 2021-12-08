<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;
use DB;

class GradoController extends Controller
{
       //
   public function index(){
    $grados = Grado::paginate(10);
    return view('grado.indexGrado')->with('grados',$grados);
}

public function relacion1(){
    $grados=DB::table('grados')
    ->join('alumnos', 'alumnos.alumno_id','=','grados.alumno_id')
    ->select('alumnos.nombre','alumnos.apellido','alumnos.identidad');
    return view('tablaGradoAlumno')->with('grados',$grados);
}

public function show($id){
    $grado = Grado::findOrFail($id);
    return view('grado.gradoIndividual')->with('grado',$grado);
}

public function create(){
    return view('grado.gradoNuevo');
}

public function store(Request $request){
    //validacion 
    $request->validate([
        'profesor_id'=>'numeric',
        'alumno_id'=>'numeric',
        'grado_id'=>'numeric',
        'nombre_clase'=>'required',
        'jornada'=>'required|alpha',
        
    ]);
    $nuevoGrado = new Grado();

    $nuevoGrado->profesor_id = $request->input('profesor_id');
    $nuevoGrado->alumno_id = $request->input('alumno_id');
    $nuevoGrado->grado_id = $request->input('grado_id');
    $nuevoGrado->nombre_clase = $request->input('nombre_clase');
    $nuevoGrado->jornada = $request->input('jornada');

    $creado = $nuevoGrado->save();

    if($creado){
        return redirect()->route('grado.index')
        ->with('mensaje', 'El Grado se creo exitosamente');
    }else{
        //retornar menssaje de error
    }

}//fin function store

public function edit($id){
    $grado = Grado::findOrFail($id);
    return view('grado.gradoNuevoEditar')
    ->with('grado', $grado);
}

public function update(Request $request, $id){
    $grado = Grado::findOrFail($id);

    //validacion 
    $request->validate([
        'profesor_id'=>'numeric',
        'alumno_id'=>'numeric',
        'grado_id'=>'numeric',
        'nombre_clase'=>'required',
        'jornada'=>'required|alpha',
        
    ]);

    $grado->profesor_id = $request->input('profesor_id');
    $grado->alumno_id = $request->input('alumno_id');
    $grado->grado_id = $request->input('grado_id');
    $grado->nombre_clase = $request->input('nombre_clase');
    $grado->jornada = $request->input('jornada');
   
    
    $creado = $grado->save();

    if($creado){
        return redirect()->route('grado.index')
        ->with('mensaje','El Grado fue modificado exitosamente');
    }else{
        //return
    }
}//fin function update

public function destroy($id){
    Grado::destroy($id);
    return redirect('/grados/')->with('mensaje','Grado Eliminado exitosamente');
}
}
