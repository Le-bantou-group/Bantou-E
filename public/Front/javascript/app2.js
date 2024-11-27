container = document.getElementById('affiche');
priceDiv = document.querySelector('#affihe .price');
descriptionDiv = document.querySelector('#affiche .description');
// Script pour créer des tableaux à partir des éléments HTML



function afficherElements() {
    // Initialiser les tableaux
    const titres = ['Lorem1', 'Lorem2', 'Lorem3'];
    const descriptions = ['description1', 'description2', 'description3'];
    const prix = ['50.000 CFA', '30.000 CFA', '20.000 CFA'];

    // Ajouter les éléments au conteneur
    container.appendChild(h1);
    container.appendChild(priceDiv);
    container.appendChild(descriptionDiv);
}
// Appeler la fonction après un intervalle de 3 secondes
setTimeout(afficherElements, 3000);