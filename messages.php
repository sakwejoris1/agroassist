<?php
session_start();
include("backend/db.php");

if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php");
    exit();
}

$farmer_id = $_SESSION['farmer_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Messages</title>
    <link rel="stylesheet" href="css/messages.css">
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <div class="sidebar" id="chatList"></div>

    <!-- CHAT AREA -->
    <div class="chat-area">

        <div class="chat-header" id="chatHeader">
            Select a conversation
        </div>

        <div class="chat-body" id="chatBody"></div>

        <div class="chat-input">
            <form id="chatForm">
                <input type="hidden" id="receiver_id" name="receiver_id">
                <input type="text" id="message" name="message" placeholder="Type a message..." required>
                <button type="submit">Send</button>
            </form>
        </div>

    </div>

</div>

<script>
let currentChat = null;

// Load conversation list
function loadChats() {
    fetch("backend/get-chats.php")
        .then(res => res.text())
        .then(data => {
            document.getElementById("chatList").innerHTML = data;
        });
}

// Open a chat
function openChat(userId, userName) {
    currentChat = userId;
    document.getElementById("receiver_id").value = userId;
    document.getElementById("chatHeader").innerText = userName;
    loadMessages();
}

// Load messages for selected chat
function loadMessages() {
    if (!currentChat) return;

    fetch("backend/fetch-chat.php?user_id=" + currentChat)
        .then(res => res.text())
        .then(data => {
            const chatBody = document.getElementById("chatBody");
            chatBody.innerHTML = data;
            chatBody.scrollTop = chatBody.scrollHeight;
        });
}

// Send message
document.getElementById("chatForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch("backend/send-message.php", {
        method: "POST",
        body: formData
    }).then(() => {
        document.getElementById("message").value = "";
        loadMessages();
    });
});

// Auto refresh
setInterval(() => {
    loadChats();
    loadMessages();
}, 2000);

// Initial load
loadChats();
</script>

</body>
</html>