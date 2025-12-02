<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>

    @if($productos->isEmpty())
        <p>No hay productos en la base de datos.</p>
    @else
        <ul>
        @foreach($productos as $producto)
            <li>
                <strong>{{ $producto->nombre }}</strong> — {{ $producto->descripcion }}
                <span> (Precio: ${{ number_format($producto->precio, 2) }})</span>
            </li>
        @endforeach
        </ul>
    @endif

</body>
</html>
