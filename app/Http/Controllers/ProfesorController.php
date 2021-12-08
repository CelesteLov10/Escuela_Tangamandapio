<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    //
    public function index(){
        $profesors = Profesor::paginate(10);
        return view('profesor.indexprofesor')->with('profesors',$profesors);
    }
    
    public function show($id){
        $profesor = profesor::findOrFail($id);
        return view('profesor.profesorIndividual')->with('profesor',$profesor);
    }
    
    public function create(){
        return view('profesor.profesorNuevo');
    }
    
    public function store(Request $request){
        //validacion 
        $request->validate([
            'grado_id'=>'numeric',
            'profesor_id'=>'numeric',
            'nombre'=>'required',
            'apellido'=>'required|alpha',
            'identidad'=>'required|unique:profesors,identidad',
            'clase'=>'required|alpha',
            'telefono'=>'required',
            
        ]);
        $nuevoprofesor = new profesor();
        
        $nuevoprofesor->grado_id = $request->input('grado_id');
        $nuevoprofesor->profesor_id = $request->input('profesor_id');
        $nuevoprofesor->nombre = $request->input('nombre');
        $nuevoprofesor->apellido = $request->input('apellido');
        $nuevoprofesor->identidad = $request->input('identidad');
        $nuevoprofesor->clase = $request->input('clase');
        $nuevoprofesor->telefono = $request->input('telefono');
    
        $creado = $nuevoprofesor->save();
    
        if($creado){
            return redirect()->route('profesor.index')
            ->with('mensaje', 'El profesor se creo exitosamente');
        }else{
            //retornar menssaje de error
        }
    
    }//fin function store
    
    public function edit($id){
        $profesor = profesor::findOrFail($id);
        return view('profesor.profesorNuevoEditar')
        ->with('profesor', $profesor);
    }
    
    public function update(Request $request, $id){
        $profesor = profesor::findOrFail($id);
    
        //validacion 
        $request->validate([
            'grado_id'=>'numeric',
            'profesor_id'=>'numeric',
            'nombre'=>'required',
            'apellido'=>'required|alpha',
            'identidad'=>'required|unique:profesors,identidad',
            'clase'=>'required|alpha',
            'telefono'=>'required',
            
        ]);
    
        $profesor->grado_id = $request->input('grado_id');
        $profesor->profesor_id = $request->input('profesor_id');
        $profesor->nombre = $request->input('nombre');
        $profesor->apellido = $request->input('apellido');
        $profesor->identidad = $request->input('identidad');
        $profesor->clase = $request->input('clase');
        $profesor->telefono = $request->input('telefono');

        
        $creado = $profesor->save();
    
        if($creado){
            return redirect()->route('profesor.index')
            ->with('mensaje','El profesor fue modificado exitosamente');
        }else{
            //return
        }
    }//fin function update
    
    public function destroy($id){
        Profesor::destroy($id);
        return redirect('/profesors/')->with('mensaje','Profesor eliminado exitosamente');
    }
}
