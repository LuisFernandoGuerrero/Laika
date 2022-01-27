<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/laikaMascotas.svg') }}" type="image/x-icon">
    <title>Laika</title>
    <!-- Fonts -->
    <link href="http://fonts.cdnfonts.com/css/armarialbold" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="subHeader">
        <p><i class="fas fa-shield-alt"></i> Compras seguras online | <i class="fas fa-hand-holding-usd"></i> Pago
            contra entrega | <i class="fas fa-truck-moving"></i> Entregas el mismo día</p>
        <p>Llamános <i class="fas fa-phone-square"></i> |3009108496</p>
        <p>Escribenos <i class="fab fa-youtube-square"></i> <i class="fab fa-instagram-square"></i> <i class="fab fa-facebook-square"></i> </p>
    </div>
    <header class="header">
        <div class="contenedorIzquierdo">
            <div class="logoLaika">
                <img src="{{ asset('img/laikaMascotas.svg') }}" alt="laikaLogo">
                <p class="nombreLaika">laika</p>
            </div>

            <form class="inputBuscador">
                <input type="text" name="buscador" id="buscador" placeholder="Encuentra lo mejor para tu mascota">
                <input type="submit" class="iconoBuscar" value="">
            </form>

            <div class="ciudadActual">
                <div class="contenidoCiudadActual">
                    <img src="{{ asset('img/flag_of_colombia.svg') }}" alt="Bandera Colombia">
                    <p class="nombreCiudad">BOGOTA</p>
                    <div class="flechaAbajo">
                        <img src="{{ asset('img/chevron-down-solid.svg') }}" alt="down">
                    </div>
                </div>
                <ul class="listaCiudades"></ul>
            </div>
        </div>
        <div class="contenedorDerecho">

            <div class="hamburguesa">
                <div class="lineaCentral"></div>
                <div class="lineas"></div>
            </div>

            <div class="cuentaCarrito">
                <div class="miCuenta">
                    <img src="{{ asset('img/user.png') }}" alt="usuario">
                    <p class="textoMiCuenta">mi cuenta</p>
                </div>
                <div class="carrito">
                    <img src="{{ asset('img/shopping-cart-solid.svg') }}" alt="shopping">
                </div>
            </div>
        </div>
    </header>
    <nav class="navegacion">
        <ul class="listaNavegacion">
            <li class="objetoLista">
                <img src="{{ asset('img/perro_animal1.svg')}}" alt="perro">
                <a href="#">Compra para perro</a>
                <div class="flechaAbajo">
                    <img src="{{ asset('img/chevron.svg')}}" alt="flechaAbajo">
                </div>
            </li>
            <li class="objetoLista">
                <img src="{{ asset('img/gato_animal2.svg')}}" alt="Gato">
                <a href="#">Compra para gato</a>
                <div class="flechaAbajo">
                    <img src="{{ asset('img/chevron.svg')}}" alt="flechaAbajo">
                </div>
            </li>
            <li class="objetoLista">
                <img src="{{ asset('img/figuras2.png')}}" alt="figuras">
                <a href="#">Ofertas</a>
                <div class="flechaAbajo">
                    <img src="{{ asset('img/chevron.svg')}}" alt="flechaAbajo">
                </div>
            </li>
            <li class="objetoLista">
                <img src="{{ asset('img/gift2.png')}}" alt="regalo">
                <a href="#">Servicios</a>
                <div class="flechaAbajo">
                    <img src="{{ asset('img/chevron.svg')}}" alt="flechaAbajo">
                </div>
            </li>
            <li class="objetoLista">
                <img src="{{ asset('img/blog2.png')}}" alt="blog">
                <a href="#">Blog</a>
                <div class="flechaAbajo">
                    <img src="{{ asset('img/chevron.svg')}}" alt="flechaAbajo">
                </div>
            </li>
        </ul>
    </nav>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="{{ asset('img/publicidad1.jpg')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('img/publicidad2.png')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('img/publicidad3.png')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('img/publicidad4.png')}}" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('img/publicidad5.png')}}" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <div class="dot-block">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            </span>
            <span class="dot" onclick="currentSlide(4)"></span>
            </span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>
    <section class="categorias">
        <div class="informacionCategorias">
            <h3 class="tituloSeccionCategorias">categorias</h3>
            <ul class="listaCategorias">
                <li>
                    <img src="{{ asset('img/foodDog.png')}}" alt="bone">
                    <a href="">Alimento</a>
                </li>
                <li>
                    <img src="{{ asset('img/bone.png')}}" alt="bone">
                    <a href="">Snacks</a>
                </li>
                <li>
                    <img src="{{ asset('img/farma.png')}}" alt="farma">
                    <a href="">Farmapet</a>
                </li>
                <li>
                    <img src="{{ asset('img/cuidado.png')}}" alt="cuidado">
                    <a href="">Cuidado e Higiene</a>
                </li>
                <li>
                    <img src="{{ asset('img/ball.png')}}" alt="ball">
                    <a href="">Juguetes</a>
                </li>
                <li>
                    <img src="{{ asset('img/accesorios.png')}}" alt="accesorios">
                    <a href="">Accesorios</a>
                </li>
                <li>
                    <img src="{{ asset('img/Petlover.png')}}" alt="petlover">
                    <a href="">Para PetLovers</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="marcasDestacadas">
        <div class="informacionMarcasDestacadas">
            <h3 class="tituloSeccionMarcas">Marcas Destacadas</h3>

            <div class="presentacionMarcasDestacadas">
                <ul class="listaMarcas">
                    <li>
                        <img src="{{ asset('img/marca1.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca2.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca3.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca4.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca5.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca6.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca7.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca8.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca1.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca2.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca3.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca4.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca5.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca6.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca7.png')}}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('img/marca8.png')}}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="productos">
        <div class="informacionProductos">
            <h3 class="tituloSeccionProductos">Un universo lleno de ofertas</h3>
            <div class="contenedorProductos">
                <div class="producto">
                    <img src="{{ asset('img/producto3.jpg') }}" alt="producto3">
                    <div class="informacionProducto">
                        <h4 class="nombreProducto">Collar menta laika perro</h4>
                        <div class="calificacion">
                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                        <div class="precios">
                            <div class="precioNormal">
                                <p class="precioInicial">$ 17.391</p>
                                <div class="precioInicialDescuento">
                                    <p>antes</p>
                                    <p>$19.990</p>
                                </div>
                            </div>

                            <div class="precioLaikaMember">
                                <p class="precioInicial">$ 16.992</p>
                                <div class="laikaMember">
                                    <img src="{{ asset('img/laikamember.svg') }}" alt="laikaMember">
                                    <a href="#">adquierela ya</a>
                                </div>
                            </div>
                        </div>
                        <div class="tallas">
                            <a class="talla botonTallaSeleccionado">S</a>
                            <a class="talla">M</a>
                            <a class="talla">L</a>
                        </div>

                        <a href="#" class="anadirCarrito">
                            <button><i class="fas fa-shopping-cart"></i> añadir al carrito</button>
                        </a>
                    </div>
                </div>
                <div class="producto">
                    <img src="{{ asset('img/producto2.jpg') }}" alt="producto2">
                    <div class="informacionProducto">
                        <h4 class="nombreProducto">Collar rosado Laika Perro</h4>
                        <div class="calificacion">
                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                        <div class="precios">
                            <div class="precioNormal">
                                <p class="precioInicial">$ 17.391</p>
                                <div class="precioInicialDescuento">
                                    <p>antes</p>
                                    <p>$19.990</p>
                                </div>
                            </div>

                            <div class="precioLaikaMember">
                                <p class="precioInicial">$ 16.992</p>
                                <div class="laikaMember">
                                    <img src="{{ asset('img/laikamember.svg') }}" alt="laikaMember">
                                    <a href="#">adquierela ya</a>
                                </div>
                            </div>
                        </div>
                        <div class="tallas">
                            <a class="talla botonTallaSeleccionado">S</a>
                            <a class="talla">M</a>
                            <a class="talla">L</a>
                        </div>

                        <a href="#" class="anadirCarrito">
                            <button><i class="fas fa-shopping-cart"></i> añadir al carrito</button>
                        </a>
                    </div>
                </div>
                <div class="producto">
                    <img src="{{ asset('img/producto1.webp') }}" alt="producto1">
                    <div class="informacionProducto">
                        <h4 class="nombreProducto">abaclean desinfectante para mascotas</h4>
                        <div class="calificacion">
                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                        <div class="precios">
                            <div class="precioNormal">
                                <p class="precioInicial">$ 17.391</p>
                                <div class="precioInicialDescuento">
                                    <p>antes</p>
                                    <p>$19.990</p>
                                </div>
                            </div>

                            <div class="precioLaikaMember">
                                <p class="precioInicial">$ 16.992</p>
                                <div class="laikaMember">
                                    <img src="{{ asset('img/laikamember.svg') }}" alt="laikaMember">
                                    <a href="#">adquierela ya</a>
                                </div>
                            </div>
                        </div>
                        <div class="tallas">
                            <a class="talla botonTallaSeleccionado">S</a>
                            <a class="talla">M</a>
                            <a class="talla">L</a>
                        </div>

                        <a href="#" class="anadirCarrito">
                            <button><i class="fas fa-shopping-cart"></i> añadir al carrito</button>
                        </a>
                    </div>
                </div>
                <div class="producto">
                    <img src="{{ asset('img/producto4.webp') }}" alt="producto4">
                    <div class="informacionProducto">
                        <h4 class="nombreProducto">Collar rosado Laika Perro</h4>
                        <div class="calificacion">
                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>

                            <button>
                                <i class="fas fa-star"></i>
                            </button>
                        </div>
                        <div class="precios">
                            <div class="precioNormal">
                                <p class="precioInicial">$ 17.391</p>
                                <div class="precioInicialDescuento">
                                    <p>antes</p>
                                    <p>$19.990</p>
                                </div>
                            </div>

                            <div class="precioLaikaMember">
                                <p class="precioInicial">$ 16.992</p>
                                <div class="laikaMember">
                                    <img src="{{ asset('img/laikamember.svg') }}" alt="laikaMember">
                                    <a href="#">adquierela ya</a>
                                </div>
                            </div>
                        </div>
                        <div class="tallas">
                            <a class="talla botonTallaSeleccionado">S</a>
                            <a class="talla">M</a>
                            <a class="talla">L</a>
                        </div>

                        <a href="#" class="anadirCarrito">
                            <button><i class="fas fa-shopping-cart"></i> añadir al carrito</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimoniales">
        <blockquote class="testimonial">


            <div class="descargarApp">
                <div class="tituloTestimonial">
                    <h5>Para una mejor experiencia para ti y tu peludo descarga la app</h5>
                </div>
                <div class="linksDescargas">
                    <img src="{{ asset('img/appStore.png') }}" alt="appStore">
                    <img src="{{ asset('img/googlePlay.png') }}" alt="google play">
                    <img src="{{ asset('img/appGallery.png') }}" alt="appGallery">
                </div>
            </div>

            <img class="imgCelular" src="{{ asset('img/imagen_phone_r.png') }}" alt="webp">

        </blockquote>
    </section>
    <section class="flotantesFijas">
        <div class="whatsapp">
            <img src="{{ asset('img/whatsapp-brands.svg') }}" alt="wpp">
        </div>
        <div class="contacto">
            <img src="{{ asset('img/comment-dots-solid.svg') }}" alt="wpp">
        </div>
        <div class="sugerencias">
            <p>sugerencias</p>
        </div>
    </section>
    <footer class="footer">
        <div class="contenidoFooter">
            <ul class="listaInicial">
                <li class="elementoLista">
                    <img src="{{ asset('img/LaikaMascotas.svg') }}" alt="LaikaMascotas">
                    <p class="nombreLaika">laika</p>
                    <p class="slogan">por mas momentos peludos</p>
                </li>
                <li class="siguenosEn">
                    <p>siguenos en:</p>
                    <div class="icons">
                        <a href=""><i class="fab fa-youtube-square"></i></a><a href=""><i class="fab fa-instagram-square"></i></a><a href=""><i class="fab fa-facebook-square"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="navs">
                <li>
                    <p>acerca de laika</p>
                </li>
                <li><a href="">sobre laika</a></li>
                <li><a href="">servicios</a></li>
                <li><a href="">trabaja con nosotros</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">terminos y condiciones</a></li>
            </ul>
            <ul class="navs">
                <li>
                    <p>links de interes</p>
                </li>
                <li><a href="">preguntas frecuentes</a></li>
                <li><a href="">¿cómo comprar en laika?</a></li>
                <li><a href="">potítica de privacidad</a></li>
                <li><a href="">contáctanos</a></li>
                <li><a href="">politicas de entrega</a></li>
            </ul>
            <ul class="navs">
                <li>
                    <p>informacion</p>
                </li>
                <li><a href="">teléfono: 3009108496</a></li>
                <li><a href="">servicioclientes@laika.com.co</a></li>
                <li><a href="">bogotá D.C., colombia</a></li>
            </ul>
            <ul class="navs">
                <li>
                    <p>subscribete</p>
                </li>
                <li><a href="">recibe noticias y promociones al instante</a></li>
                <li>
                    <div class="correoElectronico">
                        <input type="text" placeholder="correo electronico">
                        <input type="submit" value="">
                    </div>
                    <div class="terminosCondiciones">
                        <input type="checkbox" name="terminos" id="terminos">
                        <label for="terminos">he leído y acepto las politicas de privacidad</label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="postFooter">
        <img src="{{ asset('img/mercadoPago.png') }}" alt="mercadoPago">
        <img src="{{ asset('img/mastercard.png') }}" alt="mastercard">
        <img src="{{ asset('img/visa.png') }}" alt="visa">
        <img src="{{ asset('img/appstore.png') }}" alt="appstore">
        <img src="{{ asset('img/googlePlay.png') }}" alt="google play">
        <img src="{{ asset('img/appGallery.png') }}" alt="app gallery">
    </div>
    </footer>



    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>