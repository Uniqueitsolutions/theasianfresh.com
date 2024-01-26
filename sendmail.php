<?php
die("Himasnhu");
// Check if the form has been submitted
if (isset($_POST['submitForm'])) {
    // Include the PHPMailer library
    require 'smtp/PHPMailerAutoload.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // SMTP settings
    $mail->SMTPDebug = 3;  // Set this to 0 in production
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "216.10.241.228";// Replace with your SMTP server host
    $mail->Port = 587; // Replace with your SMTP port

    // Sender email and password
    $mail->Username = "info@theuniqueitsolution.com";
	$mail->Password = "info@123456789";

    // Set the sender email address
    $mail->SetFrom("contact@kingdomceramic.com");

    // Recipient email address (you can get it from the form)
    $recipientEmail = $_POST['email'];

    // Subject and body of the email (you can get them from the form)
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail->Subject = $subject;
    $mail->Body = $message;

    // Add the recipient email address
    $mail->AddAddress($recipientEmail);

    // Allow self-signed certificates (you may want to remove this in production)
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));

    // Send the email
    if ($mail->Send()) {
        echo "Message sent!";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Form submission not detected.";
}
?>
