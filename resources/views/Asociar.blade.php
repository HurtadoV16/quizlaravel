<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario profil</h1>
    <form action="{{route('personavehiculo.store')}}" method="POST" enctype="multipart/form-data">

        @csrf


        <br>

        <select name="persona_id">
            @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->id }} - {{ $persona->name }}</option>
            @endforeach
        </select>

        <select name="vehiculo_id">
            @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->id }} - {{ $vehiculo->placa }}</option>
            @endforeach
        </select>


         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
</body>
</html>
