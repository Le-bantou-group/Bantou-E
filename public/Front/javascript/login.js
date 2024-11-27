// Sélectionner les éléments de la page
const loginSection = document.getElementById('login-section');
const forgotPasswordSection = document.getElementById('forgot-password-section');
const signUpSection = document.getElementById('sign-up-section');

// Sélectionner les liens pour naviguer entre les sections
const forgotPasswordLink = document.getElementById('forgot-password-link');
const backToLoginLinks = document.querySelectorAll('#back-to-login');
const signUpLink = document.getElementById('sign-up-link');

// Fonction pour afficher la section de connexion
function showLoginSection() {
    loginSection.classList.remove('hidden');
    forgotPasswordSection.classList.add('hidden');
    signUpSection.classList.add('hidden');
}

// Fonction pour afficher la section de réinitialisation de mot de passe
function showForgotPasswordSection() {
    loginSection.classList.add('hidden');
    forgotPasswordSection.classList.remove('hidden');
    signUpSection.classList.add('hidden');
}

// Fonction pour afficher la section d'inscription
function showSignUpSection() {
    loginSection.classList.add('hidden');
    forgotPasswordSection.classList.add('hidden');
    signUpSection.classList.remove('hidden');
}

// Écouter les événements de clic sur les liens
forgotPasswordLink.addEventListener('click', (e) => {
    e.preventDefault(); // Empêche le comportement par défaut du lien
    showForgotPasswordSection();
});

backToLoginLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault(); // Empêche le comportement par défaut du lien
        showLoginSection();
    });
});

signUpLink.addEventListener('click', (e) => {
    e.preventDefault(); // Empêche le comportement par défaut du lien
    showSignUpSection();
});

// Optionnel : afficher la section de connexion par défaut lors du chargement de la page
document.addEventListener('DOMContentLoaded', showLoginSection);
// Ajout de validation lors de la soumission du formulaire de connexion
document.getElementById('login-form').addEventListener('submit', function(e) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email || !password) {
        alert('Please fill in all fields.');
        e.preventDefault(); // Empêche l'envoi du formulaire
    }
});