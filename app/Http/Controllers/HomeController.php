<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        	
        $estudiantes =  Estudiante::all();
        return view('home.index', compact('estudiantes'));

    }
 
}
