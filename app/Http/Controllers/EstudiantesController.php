<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\ProfesorPropuesta;
use Carbon\Carbon;

class EstudiantesController extends Controller  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $propuestas = Propuesta::all();
        $estudiantes =  Estudiante::all();
        return view('profesor.index', compact('estudiantes','propuestas'));
    }

    public function listarEstudiante(Estudiante $estudiante)
    {   
        
        return view('profesor.estudiantes', compact('estudiante'));
    }
    public function MostrarPropuesta(Estudiante $estudiante)
    {   	
        $estudiantes = Estudiante::all();
        return view('home.propuesta', compact('estudiantes'));

    }
    public function MostrarPropuestaEstudiante(Estudiante $estudiante)
    {
        return view('home.propuestaestudiante', compact('estudiante'));

    }
    public function MostrarComentario($id)
    {
        $propuesta = Propuesta::findOrFail($id);
        $profesor_propuesta = ProfesorPropuesta::where('propuesta_id', $id)->get();
        return view('home.comentario', compact('profesor_propuesta','propuesta'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //TODO REALIZAR VALIDACIONES DE VALORES ENTRANTES EN NULO
        //reparar status code de respuesta
        $estudiante = new Estudiante();
        $estudiante->rut = $request->input('rut');
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->email = $request->input('email');
        $estudiante->updated_at = Carbon::now('America/Santiago');
        $estudiante->created_at = Carbon::now('America/Santiago');
        $estudiante->save();
        return redirect()->route('administrador.index');
    }                                                                               

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estudiante $estudiante)
    {
        return  view('administrador.estudianteedit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->rut = $request->rut; 
        $estudiante->nombre = $request->nombre; 
        $estudiante->apellido = $request->apellido; 
        $estudiante->email = $request->email; 
        $estudiante->save();
        return redirect()->route('estudiante.editar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiante.editar');
        
    }
}
