<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAIKA</title>
    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/armarialbold" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <header class="header">
        <div class="contenedor">
            <div class="hamburguesa">
                <div class="lineaCentral"></div>
                <div class="lineas"></div>
            </div>
            
            <div class="imagen">
                <img src="{{ asset('img/LaikaMascotas.svg')}} " alt="laikaMascotas">
                <h1 class="nombre">LAIKA</h1>
            </div>
            <div class="ciudad">
                <img src="{{ asset('img/shopping-cart-solid.svg')}} " alt="laikaMascotas">
            </div>
            <div class="carrito">
                <img src="{{ asset('img/shopping-cart-solid.svg')}} " alt="laikaMascotas">
            </div>
            <input type="text" placeholder="¿Qué necesita tu mascota?" src="{{ asset('img/search-solid.svg')}} ">
        </div>
    </header>
</body>

</html>