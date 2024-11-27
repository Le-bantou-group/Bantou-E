<style>
        /* Styles de base pour la chatbox */
        
        .chatbox {
            width: 350px;
            height: 400px;
            position: fixed;
            bottom: 20px;
            right: 18px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            background-color: #f8f8f8;
            overflow: hidden;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }
        /* Header de la chatbox */
        
        .chatbox-header {
            background-color: #0078d7;
            color: #fff;
            padding: 10px;
            padding-bottom:25px;
            font-size: 16px;
            text-align: center;
        }
        /* Zone de messages */
        
        .chatbox-messages {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            background-color: #ffffff;
            font-size: 14px;
            color: #333;
        }
        /* Styles des messages */
        
        .message {
            margin: 5px 0;
        }
        
        .user-message {
            text-align: right;
            color: #0078d7;
        }
        
        .bot-message {
            text-align: left;
            color: #333;
        }
        /* Zone d'entrée de texte */
        
        .chatbox-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
            background-color: #f1f1f1;
        }
        
        .chatbox-input input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }
        
        .chatbox-input button {
            background-color: #0078d7;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            margin-left: 5px;
            cursor: pointer;
        }
        .hidden{
            display:none;
        }
        .chatbox-input button:hover {
            background-color: #005a9e;
        }
        .cancel{
            margin-top:-10%;
            color:#fff;
            margin-left:90%;
        }
        
    </style>

<div class="chatbox hidden" id='chat'>
         
        <div class="chatbox-header">Chat</div>
        <i class="fa-solid fa-xmark cancel"></i>
        
        <div class="chatbox-messages" id="chatboxMessages">
            <!-- Les messages apparaîtront ici -->
        </div>
        <div class="chatbox-input"><input type="text" id="userInput" placeholder="Votre message..."><button onclick="sendMessage()">Envoyer</button></div>
</div>