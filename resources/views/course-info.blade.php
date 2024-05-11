<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('styles/menu.css') }}">
    <title>Acerca del curso</title>
</head>
<body>

    <nav class="nav">
        <div class="btn-user">
            @auth
            <p>{{ Auth::user()->name }}</p>
            @endauth
        </div>
    </nav>
    
    <main class="container">
        <h1>{{$course->name_course}}</h1>

        <section class="courses-info">
            <div class="course-img">
                <img src="{{ asset('assets/' . $course->image) }}" alt="">
            </div>

            <div class="course-desc">
                <p>{{$course->description}}</p>
            </div>
        </section>

        @if ($course->porcentage < 100.0 || $course->porcentage == null)
        <div class="btn-quiz">
            <a href="{{ route('course-questions', ['id' => $course->id]) }}">Hacer quiz</a>
        </div>
        @elseif($course->porcentage == 100.0)
        <div class="btn-quiz">
            <a href="{{ route('course-questions', ['id' => $course->id]) }}">Reintentar</a>
        </div>
        @endif
    </main>
</body>
</html>
