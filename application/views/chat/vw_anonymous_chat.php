<!-- views/anonymous_chat_view.php -->


<div class="container mt-4">
    <h1 class="mb-4">Anonymous Chat</h1>
    <div id="chat-messages"></div>
    <textarea id="chat-input" placeholder="Type your message..."></textarea>
    <button id="send-btn">Send</button>
</div>
<script src="<?= base_url('assets/assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/aseets/js/anonymous_chat.js') ?>"></script>
<!-- views/anonymous_chat_view.php -->

<!-- Include jQuery and Socket.IO -->
<script src="<?= base_url('socket-server/node_modules/socket.io/client-list/socket.io.js') ?>"></script>

<!-- Include your chat script -->
