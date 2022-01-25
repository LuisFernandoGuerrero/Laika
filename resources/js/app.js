require('./bootstrap');


document.addEventListener('DOMContentLoaded', () => {
    animarHamburguesa();
});
//hamburguesa.addEventListener('', console.log('Hola'));

function animarHamburguesa() {
    const hamburguesa = document.querySelector('.hamburguesa');
    hamburguesa.addEventListener('click', () => { 
        hamburguesa.classList.toggle('hamburguesaActiva')
    });
}

