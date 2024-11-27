
let nextBtn = document.querySelector('.next');
let prevBtn = document.querySelector('.prev');

let slider = document.querySelector('.slider');
let sliderList = document.querySelector('.slider .list');
let thumbnail = document.querySelector('.thumbnail');
let thumbnailItems = document.querySelectorAll('.thumbnail .item');

// Initialiser la miniature
thumbnail.appendChild(thumbnailItems[0]);

// Fonction pour le bouton suivant
nextBtn.onclick = function() {
    moveSlider('next');
}

// Fonction pour le bouton précédent
prevBtn.onclick = function() {
    moveSlider('prev');
}

function moveSlider(direction) {
    let sliderItems = sliderList.querySelectorAll('.item');
    let thumbnailItems = document.querySelectorAll('.thumbnail .item');

    if (direction === 'next') {
        sliderList.appendChild(sliderItems[0]);
        thumbnail.appendChild(thumbnailItems[0]);
        slider.classList.add('next');
    } else {
        sliderList.prepend(sliderItems[sliderItems.length - 1]);
        thumbnail.prepend(thumbnailItems[thumbnailItems.length - 1]);
        slider.classList.add('prev');
    }

    slider.addEventListener('animationend', function() {
        if (direction === 'next') {
            slider.classList.remove('next');
        } else {
            slider.classList.remove('prev');
        }
    }, { once: true }); // L'événement est supprimé après avoir été déclenché une fois
}
