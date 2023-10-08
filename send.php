<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->HOST = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sourav61pahwa@gmail.com';
    $mail->Password = 'okjqwescmeqvrwbm';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('sourav61pahwa@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo "
        <script>
        alert('Sent Successfully');
        document.location.href = 'index.php';
        </script>
    ";
}
?>