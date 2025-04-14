let currentSlide = 0;

function changeSlide(index) {
    const slides = document.querySelector('.slides');
    const header = document.querySelector('header');
    currentSlide = index;
    slides.style.transform = `translateX(-${index * 100}%)`;

    // Cambiar el color del header según el slide
    if (index === 1) {
        header.style.backgroundColor = '#007BFF'; // Azul para el slide 2
    } else {
        header.style.backgroundColor = '#4CAF50'; // Verde para el slide 1
    }
}