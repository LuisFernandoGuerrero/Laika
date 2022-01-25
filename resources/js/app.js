require('./bootstrap');



// animarHamburguesa();
// mostrarCiudad()
// buscarNecesidad();
const hamburguesa = document.querySelector('.hamburguesa');
const formulario = document.querySelector('#formulario');
const ciudad = document.querySelector('.ciudad')
const navegacion = document.querySelector('.navegacion')


hamburguesa.addEventListener('click', animarHamburguesa);
formulario.addEventListener('submit', buscarNecesidad);
ciudad.addEventListener('click', mostrarCiudad);

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

function mostrarCiudad() {
    ciudad.classList.toggle('ciudadesActivas')
}

function buscarNecesidad(e) {
    e.preventDefault()

    // Trae lo que ha escrito el usuario en el input.
    const inputFormulario = document.querySelector('.necesidad').value;

    // Validar formulario
    if(inputFormulario === '') {
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