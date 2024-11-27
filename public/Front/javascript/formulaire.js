const fullnameInput = document.getElementById('fullname');
const emailGroup = document.getElementById('emailGroup');
const countryGroup = document.getElementById('countryGroup');
const phoneGroup = document.getElementById('phoneGroup');
const motiveGroup = document.getElementById('motiveGroup');
const messageGroup = document.getElementById('messageGroup');
const submitButton = document.getElementById('submitButton');

fullnameInput.addEventListener('input', () => {
    if (fullnameInput.value) {
        emailGroup.classList.remove('hidden');
    }
});

document.getElementById('email').addEventListener('input', () => {
    if (document.getElementById('email').value) {
        phoneGroup.classList.remove('hidden');
        countryGroup.classList.remove('hidden');
    }
});


document.getElementById('phone').addEventListener('input', () => {
    if (document.getElementById('phone').value) {
        motiveGroup.classList.remove('hidden');
    }
});

document.getElementById('motive').addEventListener('change', () => {
    if (document.getElementById('motive').value) {
        messageGroup.classList.remove('hidden');
    }
});

document.getElementById('message').addEventListener('input', () => {
    if (document.getElementById('message').value) {
        submitButton.classList.remove('hidden');
    }
});