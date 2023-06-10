<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Propuesta; 
use App\Models\Estudiante; 
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class PropuestaController extends Controller
{
    /**
     * Display a listing of the resource.´´
     */
    public function index()
    {

        $propuestas = Propuesta::all();
        return view('profesor.index', compact('propuestas'));
    }

    public function listarEstudiante(Propuesta $propuesta)
    {
        $propuestas = Propuesta::all();
        return view('profesor.estudiantes', compact('propuestas'));

    }
    public function administradorPro()
    {

        $propuestas = Propuesta::all();
        return view('administrador.propuestas', compact('propuestas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estudiante = Estudiante::all();
        return view('home.index', compact('estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function download($fileName) {
        return Storage::download('propuestas/' . $fileName);
    }

    public function store(Request $request)
    {   
        $propuesta = new Propuesta();
        $file = $request->file('propuesta');
    
        $fileName = $file->getClientOriginalName();
        Storage::putFileAs(
          'propuestas', $file, $fileName
        );
    
        Storage::setVisibility($fileName, 'public');

        $propuesta->estudiante_rut = $request->input("estudiante_rut"); 
        $propuesta->fecha = Carbon::now('America/Santiago');
        $propuesta->estado = 0;
        $propuesta->documento = $fileName;
        $propuesta->updated_at = Carbon::now('America/Santiago');
        $propuesta->created_at = Carbon::now('America/Santiago');
        $propuesta->save();
        return redirect()->route('home.index');
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
    public function edit(Propuesta $propuesta)
    {
        return view('administrador.propuestasedit', compact('propuesta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propuesta $propuesta)
    {
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('administrador.propuestas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
