let i = 0;
let indexDiapositive = 1;
const diapositives = document.querySelectorAll('.item-defilement');
const points = document.querySelectorAll('.point');
const conteneur = document.querySelector('.defilement');

function afficherDiapositive(index) {
    if (index > diapositives.length) indexDiapositive = 1;
    if (index < 1) indexDiapositive = diapositives.length;

    diapositives.forEach((diapositive, i) => {
        diapositive.style.display = i === indexDiapositive - 1 ? 'block' : 'none';
        points[i].className = points[i].className.replace('actif', '');
    });

    points[indexDiapositive - 1].className += ' actif';
}

function diapositiveSuivante() {
    afficherDiapositive(indexDiapositive += 1);
}

function diapositivePrecedente() {
    afficherDiapositive(indexDiapositive -= 1);
}

function diapositiveActuelle(index) {
    afficherDiapositive(indexDiapositive = index);
}
i = i + 1;
// Initialisation
afficherDiapositive(indexDiapositive);

// Changement automatique de diapositive toutes les 5 secondes
setInterval(diapositiveSuivante, 5000);
const urlImage = [
    './images/panneau5.jpg',
    "./images/panneu7.jpg",
    "./images/panneau8.jpeg"
]