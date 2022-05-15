<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'devownway@gmail.com';
        $mail->Password = 'devownway@Temp#$';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->SetFrom('contacts@atilih.net');
        $mail->AddAddress('contacts@atilih.net');

        $mail->isHTML(true);
        $mail->Subject = "Message from Atilih.net";
        $mail->Body = "<h3>Name: $name <br> Email: $email <br> Message: $message</h3>";

        $mail->send();
        $alert = '<div>Email sent successfully! Thank you</div>';

    } catch(Exception $e){
        $alert = '<span>' . $e->getMessge(). '</span>';
    }


    
}