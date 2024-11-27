let currentIndex = 0;

function showImage(index) {
    const images = document.getElementById('images');
    const totalImages = images.children.length;

    if (index >= totalImages) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalImages - 1;
    }

    // Ajuster la position pour tenir compte de l'espace
    images.style.transform = 'translateX(' + (-currentIndex * (100 + 10)) + '%)'; // 10% pour l'espace
}

function nextImage() {
    currentIndex++;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex--;
    showImage(currentIndex);
}

// Défilement automatique
setInterval(() => {
    nextImage();
}, 3000); // Change d'image toutes les 3 secondes

// Initialiser la première image
document.addEventListener('DOMContentLoaded', function() {
    showImage(currentIndex);
});