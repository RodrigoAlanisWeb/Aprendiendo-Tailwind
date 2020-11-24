<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>
</head>
<body>

    <div class="container">
        <h1 class="">Este es un titulo de prueba</h1>
        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptas dolores, odio, perferendis ex eos animi ipsum, nam accusamus similique sequi. Cum ut ab officiis ullam tempore error, quasi dolor?</p>
        <ul class="grid grid-cols-2 gap-y-4">
            <li class="">Elemento #01</li>
            <li class="">Elemento #02</li>
            <li class="col-span-2">Elemento #03</li>
        </ul>
    </div>
    
</body>
</html>