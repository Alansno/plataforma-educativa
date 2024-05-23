<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('styles/menu.css') }}">
    <title>Resultados</title>
</head>
<body>
    <nav class="nav">
        <div class="btn-user">
            @auth
            <p>{{ Auth::user()->name }}</p>
            @endauth
        </div>
    </nav>

    <main class="container-2">

    <h1>¡Felicidades, has finalizado el curso!</h1>
        <br>
    <p>Tuviste {{$hits->count()}}/{{$userAnswers->count()}} aciertos</p>
        <br>
    <img class="img-final" src="{{ asset('assets/undraw_friendship_mni7.png') }}" alt="">

    <section class="btn-sections">
        <div class="btn-constancy">
            <a href="{{ route('pdf-curso', ['id' => $courseId]) }}">Constancia</a>
        </div>
        
        <div class="btn-back">
            <a href="/menu">Volver al inicio</a>
        </div>
    </section>

    </main>
</body>
</html>
