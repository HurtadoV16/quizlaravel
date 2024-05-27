<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Accidentes</h1>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Persona</th>
                <th>Hora</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accidentes as $accidente)
            <tr>
                <td>{{ $accidente->codigo }}</td>
                <td>{{ $accidente->persona->nombre }}</td>
                <td>{{ $accidente->hora }}</td>
                <td>{{ $accidente->fecha }}</td>
                <td>{{ $accidente->lugar }}</td>
                <td>
                    <a href="{{ route('accidentes.show', $accidente->codigo) }}">Ver</a>
                    <a href="{{ route('accidentes.edit', $accidente->codigo) }}">Editar</a>
                    <form action="{{ route('accidentes.destroy', $accidente->codigo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('accidentes.create') }}">Crear Nuevo Accidente</a>
</body>
</html>
