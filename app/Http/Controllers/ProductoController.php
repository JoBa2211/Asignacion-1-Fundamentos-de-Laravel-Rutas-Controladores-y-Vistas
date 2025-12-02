<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar lista de productos
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos', ['productos' => $productos]);
    }
}
