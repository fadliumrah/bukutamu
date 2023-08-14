<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Format the WhatsApp message
    $formattedMessage = "Name: $name\nPhone: $phone\nMessage: $message";

    // URL-encode the message
    $encodedMessage = urlencode($formattedMessage);

    // Replace with your actual phone number (including country code)
    $whatsappPhoneNumber = "082283462625";

    // Generate a WhatsApp link
    $whatsappLink = "https://wa.me/$whatsappPhoneNumber?text=$encodedMessage";

    // Redirect to the WhatsApp link
    header("Location: $whatsappLink");
    exit();
}
?>
