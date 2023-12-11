// ChatSocket.js

const io = require('socket.io')(3000);

io.on('connection', (socket) => {
    console.log('User connected');

    // Listen for incoming messages
    socket.on('message', (data) => {
        // Broadcast the message to all connected clients
        io.emit('message', { message: data.message });
    });

    // Handle disconnect
    socket.on('disconnect', () => {
        console.log('User disconnected');
    });
});
