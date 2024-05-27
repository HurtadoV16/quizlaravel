<?php

use App\Models\persona_vehiculo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('personavehiculo/asociar',[persona_vehiculo::class,'asociar'])->name('personavehiculo.asociar');
Route::post('personavehiculo/store',[persona_vehiculo::class,'store'])->name('personavehiculo.store');
