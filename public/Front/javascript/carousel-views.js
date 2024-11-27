let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

function moveToNextItem() {
    currentIndex = (currentIndex + 1) % totalItems;
    const offset = -currentIndex * 300; // 300 est la largeur d'un item
    document.querySelector('.carousel-items').style.transform = `translateX(${offset}px)`;
}

// Défilement automatique toutes les 3 secondes
setInterval(moveToNextItem, 3000);