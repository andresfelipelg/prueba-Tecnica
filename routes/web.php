<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//crud empelados
Route::get('/empleados/index',[EmpleadosController::class,'index'])->name('empleados.index');
Route::get('/empleados/create',[EmpleadosController::class,'create'])->name('empleados.create');
Route::post('/empleados/store',[EmpleadosController::class,'store'])->name('empleados.store');
Route::get('/empleados/registro',[EmpleadosController::class,'registro'])->name('empleados.registro');
Route::get('/empleados/edit/{id}',[EmpleadosController::class,'edit'])->name('empleados.edit');
Route::put('/empleados/update/{id}',[EmpleadosController::class,'update'])->name('empleados.update');
Route::delete('/empleados/delete/{id}',[EmpleadosController::class,'destroy'])->name('empleados.delete');


