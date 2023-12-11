// assets/js/anonymous_chat.js

$(document).ready(function() {
    // Initialize socket.io or any other real-time communication library
    var socket = io.connect('http://localhost:MindfulYouth'); // Example, adjust the URL based on your setup

    // Listen for incoming messages
    socket.on('message', function(data) {
        $('#chat-messages').append('<p>' + data.message + '</p>');
    });

    // Handle send button click
    $('#send-btn').click(function() {
        var message = $('#chat-input').val();

        // Emit the message to the server
        socket.emit('message', { message: message });

        // Clear the input field
        $('#chat-input').val('');
    });
});
