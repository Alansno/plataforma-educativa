<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="{{ asset('styles/menu.css') }}">
    <title>preguntas</title>
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
        <h3 class="title-question">{{$question->question}}</h3>
        <form method="POST" action="{{ route('course-question-next') }}">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            <input type="hidden" name="course_id" value="{{ $courseId }}">
            @foreach ($answers as $answer)
            <div class="answers">
                <div class="answers-one">
                    <input type="radio" name="answer" value="{{$answer->id}}">
                    <label class="title-answer">{{$answer->answer}}</label> 
                </div>
            </div>  
            @endforeach
    
            <section class="ctn-btn">
                <button type="submit">Siguiente pregunta</button>
            </section>
        </form>
    </main>
    
</body>
</html>