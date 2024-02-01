<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer classes
require 'vendor/autoload.php';

// Check if the form is submitted for sending emails
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your SMTP server configuration
    $smtpHost = 'mail.automation.bnshosting.net';
    $smtpUsername = 'ojt1@automation.bnshosting.net'; // SMTP username (full email address)
    $smtpPassword = '461m5t$aF'; // SMTP password
    $smtpPort = 587; // TLS port

    // Create a PHPMailer object
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = $smtpPort;

        // Recipients from CSV
        $csvFile = $_FILES['csvFile']['tmp_name'];
        $recipients = array_map('str_getcsv', file($csvFile));

        // Content
        $mail->isHTML(true);
        //for debugging
        //$mail->SMTPDebug = 2;

        foreach ($recipients as $recipient) {
            $recipientEmail = $recipient[0];
            $recipientName = isset($recipient[1]) ? $recipient[1] : '';

            // Set recipient and sender details
            $mail->setFrom($smtpUsername, 'Randell Ty'); // You can change 'Randell Ty' to the sender's name
            $mail->addAddress($recipientEmail, $recipientName);

            // Subject and body
            $subject = 'This is a subject'; // You can set a dynamic subject if needed
            $message = 'Congrats it worked'; // You can set a dynamic message if needed

            $mail->Subject = $subject;
            $mail->Body = $message;

            // Send the email
            $mail->send();

            // Clear recipients for the next iteration
            $mail->clearAddresses();
        }

        echo 'Emails have been sent successfully';
    } catch (Exception $e) {
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}

?>