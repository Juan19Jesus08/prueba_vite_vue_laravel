<?php
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PruebaController::class,'login'])->name('prueba.login');

 Route::get('/home',[PruebaController::class,'index2'])->name('home.index');


Route::get('/cliente', [PruebaController::class,'index'])->name('cliente.index');

Route::delete('/cliente_eliminar/{cliente}', [PruebaController::class, 'destroy'])->name('cliente.destroy');

Route::post('/cliente', [PruebaController::class, 'store'])->name('cliente.store');
Route::put('/cliente/{id}', [PruebaController::class, 'update'])->name('cliente.update');



