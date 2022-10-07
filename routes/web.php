<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\AreasController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//crud empleados
Route::get('/empleados/index',[EmpleadosController::class,'index'])->name('empleados.index');
Route::get('/empleados/create',[EmpleadosController::class,'create'])->name('empleados.create');
Route::post('/empleados/store',[EmpleadosController::class,'store'])->name('empleados.store');
Route::get('/empleados/registro',[EmpleadosController::class,'registro'])->name('empleados.registro');
Route::get('/empleados/edit/{id}',[EmpleadosController::class,'edit'])->name('empleados.edit');
Route::put('/empleados/update/{id}',[EmpleadosController::class,'update'])->name('empleados.update');
Route::delete('/empleados/delete/{id}',[EmpleadosController::class,'destroy'])->name('empleados.delete');


//crud areas
Route::get('/areas/index',[AreasController::class,'index'])->name('areas.index');
Route::get('/areas/create',[AreasController::class,'create'])->name('areas.create');
Route::post('/areas/store',[AreasController::class,'store'])->name('areas.store');
Route::get('/areas/edit/{id}',[AreasController::class,'edit'])->name('areas.edit');
Route::put('/areas/update/{id}',[AreasController::class,'update'])->name('areas.update');
Route::delete('/areas/delete/{id}',[AreasController::class,'destroy'])->name('areas.delete');
