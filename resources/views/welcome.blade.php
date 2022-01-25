<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAIKA</title>
    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/armarialbold" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="subHeader">
        <p><i class="fas fa-shield-alt"></i> Compras seguras online | <i class="fas fa-hand-holding-usd"></i> Pago contra entrega | <i class="fas fa-truck-moving"></i> Entregas el mismo día</p>
        <p>Llamános <i class="fas fa-phone-square"></i> |3009108496</p>
        <p>Escribenos <i class="fab fa-youtube-square"></i> <i class="fab fa-instagram-square"></i> <i class="fab fa-facebook-square"></i> </p>
    </div>
    <header class="header">
        <div class="contenedor">
            <div class="hamburguesa">
                <div class="lineaCentral"></div>
                <div class="lineas"></div>
            </div>

            <div class="imagen">
                <img src="{{ asset('img/LaikaMascotas.svg')}}" alt="laikaMascotas">
                <h1 class="nombre">LAIKA</h1>
            </div>

            <div class="ciudad">
                <img src="{{ asset('img/flag_of_colombia.svg')}}" alt="flag">
                <p>Bog</p>
            </div>

            <div class="carrito">
                <img src="{{ asset('img/shopping-cart-solid.svg')}} " alt="laikaMascotas">
            </div>
            <div class="input">
                <form action="" id="formulario">
                    <input type="text" class="necesidad" placeholder="¿Qué necesita tu mascota?">
                    <input type="submit" class="enviarNecesidad" value="" href="#"></input>
                </form>
            </div>
        </div>
    </header>

    <section class="navegacion">
        <nav>
            <ul class="lista">
                <li>
                    <img src="{{ asset('img/perro_animal1.jpg')}}" alt="Perro">
                    <p>Perro</p>
                </li>
                <li>
                    <img src="{{ asset('img/gato_animal2.jpg')}}" alt="Gato">
                    <p>Gato</p>
                </li>
                <li>
                    <img src="{{ asset('img/figuras.png')}}" alt="Servicios">
                    <p>Servicios</p>
                </li>
                <li>
                    <img src="{{ asset('img/gift.png')}}" alt="Promociones">
                    <p>Promociones</p>
                </li>
                <li>
                    <img src="{{ asset('img/blog.png')}}" alt="Blog">
                    <p>Blog</p>
                </li>
            </ul>
        </nav>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>