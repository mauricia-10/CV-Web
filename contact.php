<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $nom = $_POST['nom'];
  $sujet = $_POST['sujet'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nkoumauricia@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'PH10dominus-1725'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('nkoumauricia@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('rmauriciankou@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = "Message CV Web";
    $mail->Body = "<h3>Nom : $nom <br>Email: $email <h3>Sujet : $sujet <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message envoyé avec succès !</span>
                 <i class="uil uil-times-circle popup_icon"></i>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

?>
      