<?php
// Retrieve the message from the request
$message = $_POST['message'];

// Write the message into a text file
file_put_contents("message.txt", $message);

// If you need to send a response back to Second Life, you can do it here
// For example, you might echo a confirmation message
echo "Message received and written to file successfully!";
?>
