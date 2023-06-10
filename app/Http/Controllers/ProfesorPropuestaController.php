<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfesorPropuesta;
use App\Models\Propuesta;

use Carbon\Carbon;

class ProfesorPropuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        
        $propuesta = Propuesta::findOrFail($id);
        $profesor_propuesta = ProfesorPropuesta::where('propuesta_id', $id)->get();
        return view('profesor.comentarios', compact('profesor_propuesta','propuesta'));
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
    public function store(Request $request, ProfesorPropuesta $profesor_propuesta)
    {
        $profesor_propuesta = new ProfesorPropuesta();
        $profesor_propuesta->propuesta_id = $request->input('propuesta_id');
        $profesor_propuesta->profesor_rut = $request->input('profesor_rut');
        $profesor_propuesta->fecha= Carbon::now('America/Santiago');
        $profesor_propuesta->hora = Carbon::now('America/Santiago')->format('H:i:s');
        $profesor_propuesta->comentario = $request->input('comentario');
        $profesor_propuesta->save();
        return redirect()->route('profesor.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfesorPropuesta $profesor_propuesta, Propuesta $propuesta)
    {

        $profesor_propuesta->delete();
        return redirect()->route('comentario.index', compact('propuesta'));
    }
}
