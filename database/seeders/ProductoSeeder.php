<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Camiseta básica', 'descripcion' => 'Camiseta de algodón, color negro.', 'precio' => 19.99],
            ['nombre' => 'Taza personalizada', 'descripcion' => 'Taza de cerámica blanca con diseño.', 'precio' => 9.5],
            ['nombre' => 'Cuaderno A5', 'descripcion' => 'Cuaderno de notas con 100 hojas.', 'precio' => 6.75],
            ['nombre' => 'Bolígrafo premium', 'descripcion' => 'Bolígrafo con tinta gel suave.', 'precio' => 3.25],
        ];

        foreach ($productos as $p) {
            Producto::create($p);
        }
    }
}
