<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('styles/menu.css') }}">
    <title>Menu principal</title>
</head>
<body>

    <nav class="nav">
        <div class="btn-user">
            @auth
            <p>{{ Auth::user()->name }} | <a class="logout" href="/logout">Salir</a></p>
            @endauth
        </div>
    </nav>

    <main class="container">
        
        <section class="txt-courses">
            <h1>Temario del curso</h1>

        <h3>Porcentaje</h3>
        </section>

        @foreach ($courses as $course)
        <section class="courses">
            <div class="courses-name">
                <p>{{$course->name_course}}</p>
                <small><a href="{{ route('course', ['id' => $course->id]) }}"><img src="{{ asset('assets/arrow-right.svg') }}" alt=""></a></small>
            </div>
            
            @if ($course->tiene_relacion == 0)
            <div class="courses-porcentage">
                <p>0% completado</p>
            </div>
            @elseif($course->tiene_relacion)
            <div class="courses-porcentage">
                <p>{{$course->porcentage}}% completado</p>
            </div>
            @endif
        </section>
        @endforeach

    </main>
</body>
</html>