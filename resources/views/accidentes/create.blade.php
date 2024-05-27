<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Nuevo Accidente</h1>
    <form action="{{ route('accidentes.store') }}" method="POST">
        @csrf
        <div>
            <label for="persona_cedula">Persona:</label>
            <select name="persona_cedula" id="persona_cedula">
                @foreach($personas as $persona)
                <option value="{{ $persona->cedula }}">{{ $persona->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" required>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>
        <div>
            <label for="lugar">Lugar:</label>
            <input type="text" name="lugar" id="lugar" required>
        </div>
        <button type="submit">Crear Accidente</button>
    </form>
</body>
</html>
