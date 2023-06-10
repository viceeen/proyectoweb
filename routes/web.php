<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\EstudiantesController;
use App\http\Controllers\ProfesorController;
use App\http\Controllers\AdministradorController;
use App\http\Controllers\PropuestaController;
use App\http\Controllers\ProfesorPropuestaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});

//Vista principal
Route::get('/',[HomeController::class, 'index'])->name('home.index');
//vista profesor
Route::get('/profesor',[ProfesorController::class, 'index'])->name('profesor.index');
//vista administrador editar profesores 
Route::get('/profesor/listado',[AdministradorController::class, 'profesorEditar'])->name('profesor.editar');
//vista administrador editar estudiantes
Route::get('/estudiante/listado',[AdministradorController::class, 'estudianteEditar'])->name('estudiante.editar');
//vista crear estudiante
Route::post('/createEstudiante', [EstudiantesController::class, 'store'])->name('estudiantes.store');
//vista crear profesor
Route::post('/profesor',[ProfesorController::class,'store'])->name('profesor.store');
//vista administrador principal
Route::get('/administrador',[AdministradorController::class,'index'])->name('administrador.index');
//vista crear propuesta
Route::post('/propuesta',[PropuestaController::class,'store'])->name('propuesta.store');
//vista cambiar datos de profesor
Route::put('/profesor/listado/{profesor}',[ProfesorController::class, 'update'])->name('profesor.update');
//vista editar profesor
Route::get('/profesor/listado/editar/{profesor}',[ProfesorController::class, 'edit'])->name('profesor.edit');
//vista editar estudiante
Route::get('/estudiante/listado/editar/{estudiante}',[EstudiantesController::class, 'edit'])->name('estudiante.edit');
//vista cambiar datos de estudiantes
Route::put('/estudiante/listado/{estudiante}',[EstudiantesController::class, 'update'])->name('estudiante.update');
//vsta eliminar profesor
Route::delete('/profesor/{profesor}',[ProfesorController::class,'destroy'])->name('profesor.destroy');
//vista elimiar estudiante
Route::delete('/estudiante/{estudiante}',[EstudiantesController::class,'destroy'])->name('estudiante.destroy');
//vista propuestas estudiantes
//Route::get('/estudiante/propuesta/{estudiante}',[PropuestaController::class,'listarEstudiante'])->name('estudiante.propuesta');
//vista ver todas las propuestas administrador
Route::get('/administrador/propuestas',[PropuestaController::class,'administradorPro'])->name('administrador.propuestas');
//Vista de cambair estado propuesta administrador
Route::put('/admimistrador/propuestas/{propuesta}',[PropuestaController::class,'update'])->name('propuestas.update');
//vista propuesta administrador
Route::get('/administrador/propuestas/{propuesta}',[PropuestaController::class,'edit'])->name('propuesta.edit');
//vista de propuestas profesores
Route::get('/propuesta/{estudiante}',[EstudiantesController::class,'listarEstudiante'])->name('profesor.estudiante');
//vista de agregar comentario
Route::post('/propuesta/comentario',[ProfesorPropuestaController::class,'store'])->name('comentario.store');
//mandar datos
Route::get('/propuesta/comentario/{propuesta}',[ProfesorPropuestaController::class,'index'])->name('comentario.index');
//eliminar comentario
Route::delete('/propuesta/comentario',[ProfesorPropuestaController::class,'destroy'])->name('comentario.destroy');
//Vista estudiantes home
Route::get('/estudiantes/propuestas',[EstudiantesController::class,'MostrarPropuesta'])->name('estudiante.propuesta');
//vista propuesta de estudiante
Route::get('/estudiantes/propuestas/{estudiante}',[EstudiantesController::class,'MostrarPropuestaEstudiante'])->name('estudiante.propuestas_estudiante');
//vista comentario home
Route::get('/estudiantes/propuestas/comentario/{estudiante}',[EstudiantesController::class,'MostrarComentario'])->name('estudiante.comentario');
//descarcar propuesta
Route::get('/download/{propuesta}',[PropuestaController::class,'download'])->name('download.propuesta');
//volver
Route::get('/estudiantes/propuestasS',[HomeController::class,'volver'])->name('volver.home');