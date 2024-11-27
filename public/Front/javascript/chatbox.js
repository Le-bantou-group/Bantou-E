function sendMessage() {
    const input = document.getElementById("userInput");
    const message = input.value.trim();
    if (message) {
        addMessage(message, 'user-message');
        input.value = ''; // Réinitialise le champ de saisie
        botReply(message); // Appelle une réponse automatique du bot
    }
}

function addMessage(text, className) {
    const messagesContainer = document.getElementById("chatboxMessages");
    const messageElement = document.createElement("div");
    messageElement.className = 'message ' + className;
    messageElement.textContent = text;
    messagesContainer.appendChild(messageElement);
    messagesContainer.scrollTop = messagesContainer.scrollHeight; // Défile vers le bas
}

function botReply(userMessage) {
    const responses = {
        "bonjour": "Bonjour ! Comment puis-je vous aider ?",
        "ça va": "Je vais bien, merci ! Et vous ?",
        "merci": "Avec plaisir !",
        "au revoir": "Au revoir ! Passez une bonne journée !"
    };
    const botMessage = responses[userMessage.toLowerCase()] || "Désolé, je ne comprends pas.";
    setTimeout(() => addMessage(botMessage, 'bot-message'), 500); // Délai pour la réponse du bot
}
const chat = document.querySelector('.chat-bot');
const chat_btn = document.getElementById('chat');
const cancel = document.querySelector('.cancel');
//console.log(chat_btn);
//console.log(cancel);
chat.addEventListener('click', () => {
    chat_btn.classList.remove('hidden');
});
cancel.addEventListener('click', () => {
    chat_btn.classList.add('hidden');
});
// Envoi avec la touche Entrée
document.getElementById("userInput").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    }

);