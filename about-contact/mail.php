<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $bot_answer = $_POST['bq'];

    // Check if the bot-blocker question is answered correctly
    if (trim($bot_answer) !== '9') {
        echo "Incorrect answer to the anti-bot question. Please go back and try again.";
        exit; // Stop further processing
    }

    $formcontent = "From: $email  \nMessage: $message";
    $recipient = "faithalone.net@gmail.com";
    $subject = "You've been contacted";
    $mailheader = "From: faitpkoe@faithalone.net \r\n";
    mail($recipient, $subject, $formcontent, $mailheader);

    header("Location: about-contact.html");
    exit;
}
?>