<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('styles/sing-in.css') }}">
    <title>Regístrate</title>
</head>
<body>
    <main class="principal-form">
        <form action="/create" method="POST" class="form-pla-register">
            @csrf
            <h4 class="txt-form">Regístrate</h4>
            
            <div class="input-ctn">
            <label for="">Correo electrónico</label>
            <input type="email" name="email">
            </div>

            <div class="input-ctn">
            <label for="">Nombre de usuario</label>
            <input type="text" name="name">
            </div>

            <div class="input-ctn">
            <label for="">Contraseña</label>
            <input type="password" name="password">
            </div>

            <button value="Regístrar" class="btn-sing-in" type="submit">
                Regístrar
            </button>

            @if ($errors->any())
            <div class="msj-validations">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
        </form>
    </main>
</body>
</html>

