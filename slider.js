let currentSlide = 0;

function changeSlide(index) {
    const slides = document.querySelector('.slides');
    const header = document.querySelector('header');
    const controls = document.querySelectorAll('.control');
    currentSlide = index;
    slides.style.transform = `translateX(-${index * 100}%)`;

    // Cambiar el color del header según el slide
    if (index === 1) {
        header.classList.add('blue');
    } else {
        header.classList.remove('blue');
    }

    // Actualizar el estado activo de los controles
    controls.forEach((control, i) => {
        if (i === index) {
            control.classList.add('active');
        } else {
            control.classList.remove('active');
        }
    });
}