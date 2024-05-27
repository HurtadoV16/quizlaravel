<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del Accidente</h1>
    <p><strong>Código:</strong> {{ $accidente->codigo }}</p>
    <p><strong>Persona:</strong> {{ $accidente->persona->nombre }}</p>
    <p><strong>Hora:</strong> {{ $accidente->hora }}</p>
    <p><strong>Fecha:</strong> {{ $accidente->fecha }}</p>
    <p><strong>Lugar:</strong> {{ $accidente->lugar }}</p>
    <a href="{{ route('accidentes.index') }}">Volver al Listado</a>
</body>
</html>
