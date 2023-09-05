<!DOCTYPE html>
<html>
<head>
    <title>Simple Chat</title>
</head>
<body>
    <input type="text" id="message" placeholder="Type a message...">
    <button onclick="sendMessage()">Send</button>
    <div id="chat"></div>

    <script>
        const socket = new WebSocket('ws://localhost:8080');

        socket.onmessage = function(event) {
            const chat = document.getElementById('chat');
            chat.innerHTML += `<p>${event.data}</p>`;
        };

        function sendMessage() {
            const messageInput = document.getElementById('message');
            const message = messageInput.value;
            socket.send(message);
            messageInput.value = '';
        }
    </script>
</body>
</html>
