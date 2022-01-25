require('./bootstrap');
document.addEventListener('DOMContentLoaded', consultarAPICiudades)

const hamburguesa = document.querySelector('.hamburguesa');
const formulario = document.querySelector('#formulario');
const navegacion = document.querySelector('.navegacion');
const selectCiudad = document.querySelector('.listaCiudades');
const ciudad = document.querySelector('.ciudad');

hamburguesa.addEventListener('click', animarHamburguesa);
formulario.addEventListener('submit', buscarNecesidad);
ciudad.addEventListener('click', mostrarListaCiudades)

function mostrarListaCiudades() {
    selectCiudad.classList.toggle('mostrarListaCiudades');

}

// Menu Hamburguesa
function animarHamburguesa() {
    hamburguesa.classList.toggle('hamburguesaActiva');

    mostrarMenu();
}

function mostrarMenu() {
    const hamburguesaActiva = document.querySelector('.hamburguesaActiva');

    if (hamburguesaActiva) {
        navegacion.classList.add('navegacionActiva')
    } else {
        navegacion.classList.remove('navegacionActiva')
    }
}
// Final Menu Hamburguesa

// Validación busqueda
function buscarNecesidad(e) {
    e.preventDefault()

    // Trae lo que ha escrito el usuario en el input.
    const inputFormulario = document.querySelector('.necesidad').value;

    // Validar formulario
    if (inputFormulario === '') {
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
    }

    console.log(`Bien hecho, has escrito: ${inputFormulario}`);

}
// Final Validación busqueda

// Consulta API de ciudades y mostrarlas en html
function consultarAPICiudades() {
    const url = 'http://localhost:4000/ciudades';

    fetch(url)
        .then(respuesta => respuesta.json())
        .then(ciudades => selectCiudades(ciudades))
}

function selectCiudades(ciudades) {
    ciudades.forEach(ciudad => {
        const { nombre, nombreCorto } = ciudad;
        
        const opcion = document.createElement('li')
        opcion.textContent = `${nombre}, (${nombreCorto})`;
        opcion.value = nombre;
        selectCiudad.appendChild(opcion)
    });
}

// Final Consulta API de ciudades y mostrarlas en html
