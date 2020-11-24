<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>
    <style>
        .imagen{
            background-image: url("{{ asset('img/firewatch-road-ox-1920x1080.jpg') }}");
            height: 500px;
            width: 500px;
            margin: 0px auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class=" text-center text-3xl font-bold mb-3">Backgrouns</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil dolore sunt ab? Rem minus praesentium id harum, aspernatur enim est magni unde necessitatibus! Quidem, totam veniam? Eligendi voluptas similique ad!</p>
        <div class="imagen bg-cover bg-right border-8 border-black bg">

        </div>
    </div>
    
</body>
</html>