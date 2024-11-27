// SCRIPT POUR LE TEXTE SUR LA VIDEO
const video = document.getElementById('myVideo');
    const overlayText = document.getElementById('overlayText');

    video.addEventListener('play', function () {
        overlayText.style.opacity = '0';
    });

    video.addEventListener('pause', function () {
        overlayText.style.opacity = '1';
});