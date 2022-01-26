require('./bootstrap');
const hamburguesa = document.querySelector('.hamburguesa');
const navegacion = document.querySelector('.navegacion');
const listaCiudades = document.querySelector('.listaCiudades');
const contenidoCiudadActual = document.querySelector('.contenidoCiudadActual');
const formulario = document.querySelector('.inputBuscador');
var index = 1;

document.addEventListener('DOMContentLoaded', () => {
    consultarAPICiudades();
    hamburguesa.addEventListener('click', animarHamburguesa)
    contenidoCiudadActual.addEventListener('click', animarListaCiudades)
    formulario.addEventListener('submit', validarBuscador)
    verImagenes(index);
})

// Menu Hamburguesa
function animarHamburguesa() {
    // Animar hamburguesa
    hamburguesa.classList.toggle('hamburguesaActiva');
    // Mostrar el menu
    navegacion.classList.toggle('navegacionActiva')
}

// Ciudades
function consultarAPICiudades() {
    const url = 'http://localhost:4000/ciudades';
    fetch(url)
        .then(respuesta => respuesta.json())
        .then(ciudades => mostrarCiudades(ciudades))
}
function mostrarCiudades(ciudades) {
    ciudades.forEach(ciudad => {
        const { nombre, nombreCorto } = ciudad;
        const ciudadOpcion = document.createElement('LI');
        ciudadOpcion.classList.add('ciudadOpcion');
        ciudadOpcion.textContent = `${nombre}, (${nombreCorto})`;
        listaCiudades.appendChild(ciudadOpcion)
    });
}
function animarListaCiudades() {
    listaCiudades.classList.toggle('mostrarListaCiudades')
}

// Validar buscador
function validarBuscador(e) {
    e.preventDefault();
    const buscador = document.querySelector('#buscador').value;

    if (buscador === '') {
        Swal.fire({
            icon: 'error',
            title: 'No has escrito nada &#128542;',
            text: '¡Pero vuelve a intentarlo!',
            timer: 3000,
            timerProgressBar: true,
            footer: 'Copyright &copy; 2021 LAIKA - Derechos reservados',
            confirmButtonText: '¡Vamos!'
        })
        return;
    } else {
        console.log(`Muy bien, escribiste: ${buscador}`);
    }
}

// Carousel 

loop();

function loop() { setTimeout(function () { verImagenes(index += 1); loop() }, 3000); }

function plusSlides(n) {
    verImagenes(index += n);
}

function currentSlide(n) {
    verImagenes(index = n);
}

function verImagenes(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { index = 1 }
    if (n < 1) { index = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    slides[index - 1].style.display = "block";
    dots[index - 1].className += " active";
}