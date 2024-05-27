<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Accidente</h1>
    <form action="{{ route('accidentes.update', $accidente->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="persona_cedula">Persona:</label>
            <select name="persona_cedula" id="persona_cedula">
                @foreach($personas as $persona)
                <option value="{{ $persona->cedula }}" {{ $persona->cedula == $accidente->persona_cedula ? 'selected' : '' }}>{{ $persona->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" value="{{ $accidente->hora }}" required>
        </div>
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="{{ $accidente->fecha }}" required>
        </div>
        <div>
            <label for="lugar">Lugar:</label>
            <input type="text" name="lugar" id="lugar" value="{{ $accidente->lugar }}" required>
        </div>
        <button type="submit">Actualizar Accidente</button>
    </form>
</body>
</html>
