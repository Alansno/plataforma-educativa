<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('styles/certificate.css') }}">
    <title>Certificado</title>
</head>
<body>
    
    <main class="container">
        <div class="ctn-ones">
            <h3 class="txt-one">CERTIFICADO DE PARTICIPACIÓN</h3>
            <img src="{{ public_path('assets/unach.png') }}" alt="">
        </div>
        <H1 class="txt-title">RECONOCIMIENTO A</H1>
    
        <div class="user">
            <h1 class="txt-user">{{$user}}</h1>
        <hr>
        </div>
    
        <p class="txt-rest">POR HABER CONCLUIDO EXITOSAMENTE EL CURSO "{{$course->name_course}}"; RECONOCEMOS Y FELICITAMOS TU COMPROMISO CON LA PRESERVACIÓN AMBIENTAL Y LA LUCHA CONTRA LA DEFORESTACIÓN.</p>
    </main>

  
</body>
</html>