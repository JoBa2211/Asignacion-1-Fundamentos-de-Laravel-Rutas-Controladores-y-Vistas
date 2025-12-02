<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Mostrar vista de bienvenida estática.
     */
    public function bienvenida()
    {
        return view('bienvenida');
    }

    /**
     * Mostrar saludo dinámico pasando el nombre a la vista.
     *
     * @param  string  $nombre
     */
    public function saludo($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
