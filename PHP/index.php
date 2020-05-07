<?php
  require 'PHPMailer\PHPMailer.php';
  require 'PHPMailer\SMTP.php';
  require 'PHPMailer\Exception.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  $mail = new PHPMailer();

  try {
      $mail->SMTPDebug = 0;
      $mail->isSMTP();
      $mail ->Host      = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'Tu correo';
      $mail->Password   = 'Tu contraseña';
      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;

      $mail->setFrom('Tu correo','de parte de...');
      $mail->addAddress('Correo del receptor');

      $mail->isHTML(true);
      $mail->Subject = 'Asunto';
      $mail->Body    = 'Cuerpo del correo';

      $mail->addAttachment('Archivo adjunto');

      $mail->send();

      echo 'El mensaje ha sido enviado correctamente.';
  } catch (Exception $e) {
      echo "El mensaje no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}";
  }
?>
