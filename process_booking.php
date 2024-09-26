<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (other variables from $_POST)
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    // Access data
    $type = $data['type'] ?? '';
    $customer_phone = $data['customer_phone'] ?? '';
    $departure_address = $data['departure_address'] ?? '';
    $arrival_address = $data['arrival_address'] ?? '';
    $departure_date = $data['departure_date'] ?? '';

    // Generate a unique order number
    $order_number = uniqid('Order_');

    // Log file path in the same directory as the PHP script
    $logFilePath = __DIR__ . '/error.log';

    // Open or create the log file
    $errorLog = fopen($logFilePath, 'a');

    if ($errorLog) {
        // Email details
        $to = 'contact@taxi-pari.com';
        $subject = 'Nouvelle Réservation - ' . $order_number;

        // Compose the email message
        $message = "
 <html>
        <head>
        <title>Nouvelle Réservation</title>
        </head>
        <body>
        <p>Numéro de commande: $order_number</p>
        <p>Vous avez reçu une nouvelle réservation!</p>
        <br>
        <p>Information de réservation:<p>
        <p>Address de départ: $departure_address</p>
        <p>Adresse d'arrivée: $arrival_address</p>
        <p>Numéro de téléphone: $customer_phone</p>
        <p>Date: $departure_date</p>

        </body>
        </html>
        ";

        // Headers for HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers with sender name
        $from_email = 'contact@taxi-pari.com';
        $sender_name = 'TAXI PARIS #' . $order_number;
        $headers .= 'From: ' . $sender_name . ' <' . $from_email . '>' . "\r\n";

        // Send email
        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            echo "Email sent successfully";
        } else {
            echo "Failed to send email";
            fwrite($errorLog, "Failed to send email\n");
        }

        // Close the log file
        fclose($errorLog);
    } else {
        echo "Error opening log file";
    }
}
