<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\Grado;




class RelacionesController extends Controller
{
    //

    public function index(){
        $alumno = Alumno::findOrFail(1);
        $grado = Grado::findOrFail(2);
        return view ('tablaGradoAlumno', compact('alumno', 'grado'));
    }
    public function indexprof(){
        $profesor = Profesor::findOrFail();
        $grado = Grado::findOrFail();
        return view ('', compact('Profesor', 'grado'));
    }
}
