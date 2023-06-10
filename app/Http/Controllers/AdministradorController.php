<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administrador.index');
        
    }

    public function profesorEditar()
    {
        $profesores = Profesor::all();
        return view('administrador.profesores', compact('profesores'));


    }
    public function estudianteEditar()
    {
        $estudiantes = Estudiante::all();
        return view('administrador.estudiantes', compact('estudiantes'));

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
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
