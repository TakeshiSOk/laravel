<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\FactorialController;
use App\Http\Controllers\PromedioController;
use App\Http\Controllers\Multiplicar;
use App\Http\Controllers\GenerarNumeros;



Route::get('funcionAdivinar', [JuegoController::class, 'funcionAdivinar']);
Route::post('adivinar', [JuegoController::class, 'adivinar'])->name('adivinar.jugar');


Route::get('frmfactorial', [FactorialController::class, 'frmfactorial']);
Route::post('factorial', [FactorialController::class, 'factorial'])->name('factorial.calcular');

Route::get('frmnotas', [PromedioController::class, 'frmnotas']);
Route::post('notas', [PromedioController::class, 'notas'])->name('notas.calcular');

Route::get('frmtabla', [Multiplicar::class, 'frmtabla']);
Route::post('tabla', [Multiplicar::class, 'tabla'])->name('tabla.calcular');

Route::get('frmnumeros', [GenerarNumeros::class, 'frmnumeros']);
Route::post('numeros', [GenerarNumeros::class, 'numeros'])->name('numeros.analizar');
