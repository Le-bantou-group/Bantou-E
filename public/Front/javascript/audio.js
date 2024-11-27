self.addEventListener('message', (event) => {
    if (event.data === 'play') {
        // Code pour lancer la lecture de la musique
    } else if (event.data === 'pause') {
        // Code pour mettre en pause la musique
    }
});

// script.js (page principale)
const audio = document.getElementById('myAudio');
const worker = new Worker('service-worker.js');

// Vérifier l'état de lecture dans le localStorage
const isPlaying = localStorage.getItem('isPlaying') === 'true';
if (isPlaying) {
    worker.postMessage('play');
}

// Écouteurs d'événements pour le bouton de pause/play
// ...

// Mettre à jour le localStorage à chaque changement d'état
audio.addEventListener('play', () => {
    localStorage.setItem('isPlaying', 'true');
});
audio.addEventListener('pause', () => {
    localStorage.setItem('isPlaying', 'false');
});