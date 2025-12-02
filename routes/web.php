<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return 'Hola Mundo';
});

// Ruta estática de bienvenida
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// Ruta dinámica de saludo
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
