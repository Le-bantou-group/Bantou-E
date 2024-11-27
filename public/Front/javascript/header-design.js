let next = document.getElementById('next');
let prev = document.getElementById('prev');
let carrousel = document.querySelector('.carroussel');
let items = document.querySelectorAll('.carrousel.item');
let Count = items.length;
let active = 1;
let other_1 = null;
let other_2 = null;
next.onclick = () => {
        active = active + 1 >= Count ? 0 : active + 1;
        other_1 = active - 1 < 0 ? Count - 1 : active - 1;
        other_2 = active + 1 >= Count ? 0 : active + 1;
        slide();
    }
    //Fonction pour retirer les slides 
const slide = () => {
    let itemact2 = document.querySelector('.carroussel .item .active');
    if (itemact2) itemact2.classList.remove('active');

    let itemother1 = document.querySelector('.carroussel .item .active');
    if (itemother2) itemother1.classList.remove('other_1');

    let itemother2 = document.querySelector('.carroussel .item .active');
    if (itemother2) itemother2.classList.remove('other_2');
}
items.forEach(e => {

});
//Ajout de classe
items[active].classList.add('active');
items[other_1].classList.add('other_1');
items[other_2].classList.add('aother_2');