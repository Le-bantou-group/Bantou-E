<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Chat Application</title>
    <style>
        /* General styling */
        
        body,
        html {
            margin: 0;
            padding: 0;
            
            background-color: #e0e7ff;
        }
        
        .chat-container {
            display: flex;
            height: 100vh;
        }
        /* Sidebar - Contact list */
        
        .contact-list {
            width: 25%;
            background-color: #2f4f73;
            color: white;
            display: flex;
            flex-direction: column;
        }
        
        .search-bar {
            padding: 10px;
            background-color: #3f5a84;
            display: flex;
            align-items: center;
        }
        
        .search-bar input {
            width: 80%;
            padding: 8px;
            border-radius: 20px;
            border: none;
            outline: none;
        }
        
        .search-bar button {
            background-color: transparent;
            border: none;
            font-size: 18px;
            color: white;
            cursor: pointer;
            margin-left: 10px;
        }
        
        .contact {
            display: flex;
            align-items: center;
            padding: 15px;
            cursor: pointer;
            border-bottom: 1px solid #3f5a84;
            transition: background-color 0.3s;
        }
        
        .contact:hover {
            background-color: #3f5a84;
        }
        
        .contact img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin-right: 15px;
        }
        
        .contact-info h4 {
            margin: 0;
            font-size: 16px;
        }
        
        .contact-info p {
            margin: 3px 0 0 0;
            font-size: 12px;
            color: #cfd6e6;
        }
        /* Chat Window */
        
        .chat-window {
            width: 75%;
            background-color: #192c4a;
            display: flex;
            flex-direction: column;
        }
        
        .chat-header {
            display: flex;
            align-items: center;
            background-color: #253a60;
            padding: 15px;
        }
        
        .chat-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }
        
        .chat-header-info h4 {
            margin: 0;
            color: white;
        }
        
        .chat-header-info p {
            margin: 3px 0 0 0;
            font-size: 12px;
            color: #cfd6e6;
        }
        
        .chat-actions {
            width: 56vw;
            padding-left: 1rem;
            position: relative;
        }
        
        .chat-actions button {
            background-color: transparent;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        
        .chat-actions button:nth-child(3) {
            position: absolute;
            right: 10px;
        }
        /* Chat Content */
        
        .chat-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }
        
        .message {
            display: flex;
            margin-bottom: 20px;
        }
        
        .message.received {
            justify-content: flex-start;
        }
        
        .message.sent {
            justify-content: flex-end;
        }
        
        .message img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .message.sent img {
            margin-left: 10px;
            margin-right: 0;
        }
        
        .message-bubble {
            max-width: 60%;
            background-color: #3f5a84;
            color: white;
            padding: 10px 15px;
            border-radius: 20px;
            position: relative;
        }
        
        .message.sent .message-bubble {
            background-color: #4fc3f7;
            color: black;
        }
        
        .message-bubble p {
            margin: 0;
        }
        
        .message-bubble .time {
            font-size: 10px;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 5px;
        }
        
        .message.sent .time {
            color: rgba(0, 0, 0, 0.6);
        }
        /* Message input */
        
        .message-input {
            padding: 15px;
            background-color: #253a60;
            display: flex;
            align-items: center;
            border-top: 1px solid #3f5a84;
        }
        
        .message-input input {
            flex-grow: 1;
            padding: 10px;
            border-radius: 25px;
            border: none;
            outline: none;
        }
        
        .message-input button {
            background-color: transparent;
            color: white;
            border: none;
            padding: 20px;
            margin-left: 10px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <!-- Sidebar - List of contacts -->
        <div class="contact-list">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="contact">
                <img src="avatar1.jpg" alt="Khalid Charif">
                <div class="contact-info">
                    <h4>Khalid Charif</h4>
                    <p>Online</p>
                </div>
            </div>
            <div class="contact">
                <img src="avatar2.jpg" alt="Chaymae Naim">
                <div class="contact-info">
                    <h4>Chaymae Naim</h4>
                    <p>Last seen 7 min ago</p>
                </div>
            </div>
            <div class="contact">
                <img src="avatar3.jpg" alt="Sami Rafi">
                <div class="contact-info">
                    <h4>Sami Rafi</h4>
                    <p>Online</p>
                </div>
            </div>
            <div class="contact">
                <img src="avatar4.jpg" alt="Hassan Agmir">
                <div class="contact-info">
                    <h4>Hassan Agmir</h4>
                    <p>Last seen 30 min ago</p>
                </div>
            </div>
        </div>

        <!-- Chat window -->
        <div class="chat-window">
            <div class="chat-header">
                <img src="avatar1.jpg" alt="Khalid Charif">
                <div class="chat-header-info">
                    <h4>Khalid Charif</h4>
                    <p>1767 Messages</p>
                </div>
                <div class="chat-actions">
                    <button><i class="fa-solid fa-video"></i></button>
                    <button><i class="fa-solid fa-phone"></i></button>
                    <button><i class="fa-solid fa-ellipsis-vertical"></i></button>
                </div>
            </div>

            <div class="chat-content" id="chat-content">
                <div class="message received">
                    <img src="avatar1.jpg" alt="Khalid">
                    <div class="message-bubble">
                        <p>I am looking for your next templates</p>
                        <span class="time">9:07 AM, Today</span>
                    </div>
                </div>
                <div class="message sent">
                    <div class="message-bubble">
                        <p>You are welcome</p>
                        <span class="time">9:10 AM, Today</span>
                    </div>
                    <img src="user-avatar.jpg" alt="You">
                </div>
                <div class="message received">
                    <img src="avatar1.jpg" alt="Khalid">
                    <div class="message-bubble">
                        <p>Bye, see you</p>
                        <span class="time">9:11 AM, Today</span>
                    </div>
                </div>
            </div>

            <div class="message-input">
                <input type="text" id="message-input" placeholder="Type your message...">
                <button id="send-btn"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script>
        // Select elements
        const sendButton = document.getElementById('send-btn');
        const inputField = document.getElementById('message-input');
        const chatContent = document.getElementById('chat-content');

        // Handle sending a message
        sendButton.addEventListener('click', sendMessage);
        inputField.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        function sendMessage() {
            const messageText = inputField.value.trim();
            if (messageText !== "") {
                addMessage('sent', messageText); // Add user message
                inputField.value = ""; // Clear input field

                setTimeout(() => {
                    generateBotResponse(messageText); // Simulate bot response
                }, 1000); // Simulate delay
            }
        }

        // Add message to chat window
        function addMessage(type, messageText) {
            const messageElem = document.createElement('div');
            messageElem.classList.add('message', type);

            const messageBubble = document.createElement('div');
            messageBubble.classList.add('message-bubble');
            messageBubble.innerHTML = `<p>${messageText}</p><span class="time">${getTime()}</span>`;

            messageElem.appendChild(messageBubble);
            chatContent.appendChild(messageElem);
            chatContent.scrollTop = chatContent.scrollHeight; // Scroll to the bottom
        }

        // Simulate bot response
        function generateBotResponse(userMessage) {
            const botMessage = "I'm just a bot, but I heard you say: " + userMessage;
            addMessage('received', botMessage);
        }

        // Get current time
        function getTime() {
            const now = new Date();
            return now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
        }
    </script>
</body>

</html>