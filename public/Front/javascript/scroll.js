window.addEventListener('scroll', function() {
    const box = document.getElementById('animated-box');
    const boxPosition = box.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.2; // Ajuste le point d'activation

    if (boxPosition < screenPosition) {
        box.classList.add('animate'); // Ajoute la classe pour l'animation
    }
});