function updatePhoneNumber() {
    const select = document.getElementById('country');
    const selectedValue = select.value;
    const phoneInput = document.getElementById('phone');

    // Si un pays est sélectionné, mettre à jour le placeholder avec le code de pays
    if (selectedValue) {
        phoneInput.placeholder = ` (${selectedValue})`;
    } else {
        phoneInput.placeholder = 'Votre numéro de téléphone';
    }
}