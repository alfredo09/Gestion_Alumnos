<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroAlumnosController;

Route::post('/registrar-alumno', [RegistroAlumnosController::class, 'metodoQueManejaPost']);
Route::get('/alumnos/{id}/editar', [RegistroAlumnosController::class, 'editarAlumno'])->name('alumnos.editar');
Route::put('/alumnos/{id}/actualizar', [RegistroAlumnosController::class, 'actualizarAlumno'])->name('alumnos.actualizar');
Route::delete('/alumnos/{id}/eliminar', [RegistroAlumnosController::class, 'eliminarAlumno'])->name('alumnos.eliminar');
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

Route::get('/', function () {
    return view('welcome');
});
