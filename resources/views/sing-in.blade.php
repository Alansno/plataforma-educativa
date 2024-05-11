<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ secure_asset('styles/sing-in.css') }}">
    <title>Iniciar sesión</title>
</head>
<body>
    <main class="principal-form">
        <form action="/ingresar" method="POST" class="form-pla">
            @csrf
            <h4 class="txt-form">Iniciar sesión</h4>
            
            <div class="input-ctn">
            <label for="">Nombre de usuario</label>
            <input type="text" name="name">
            </div>

            <div class="input-ctn">
            <label for="">Contraseña</label>
            <input type="password" name="password">
            </div>

            <button value="Iniciar sesion" class="btn-sing-in" type="submit">
                Iniciar sesión
            </button>
            <a class="btn-sing-up" href="/registrate">Regístrate</a>

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
