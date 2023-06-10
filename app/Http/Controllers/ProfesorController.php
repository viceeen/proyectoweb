<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Illuminate\Http\Request;


class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propuestas = Propuesta::all();
        $estudiantes =  Estudiante::all();
        $profesores = Profesor::all();
        return view('profesor.index', compact('profesores', 'propuestas', 'estudiantes'));
        
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
        $profesor = new Profesor();
        $profesor->rut = $request->input('profesor_rut');
        $profesor->nombre = $request->input('profesor_nombre');
        $profesor->apellido = $request->input('profesor_apellido');
        $profesor->save();
        return view('administrador.index');
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
    public function edit(Profesor $profesor)
    {
        return  view('administrador.profesoredit', compact('profesor'));
    }   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $profesor->rut = $request->profesor_rut;
        $profesor->nombre = $request->profesor_nombre;
        $profesor->apellido = $request->profesor_apellido;
        $profesor->save();
        return redirect()->route('profesor.editar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesor.editar');
    }
}
