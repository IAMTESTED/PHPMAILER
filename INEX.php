<?php


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

try {
  $mail->SMTPDebug=2;
  $mail->isSMTP();
  $mail->Host='smtp.gmail.com;';
  $mail->SMTPAuth=true;
  $mail->Username='A.K.GUPTA.3216@gmail.com';
  $mail->Password='AKG070797';
  $mail->SMTPSecure='tls';
  $mail->Port=587;

  $mail->setFrom('A.K.GUPTA.3216@gmail.com', 'A.K.GUPTA.3216@gmail.com');
  $mail->addAddress('A.K.GUPTA.3216@gmail.com');
  $mail->addReplyTo('A.K.GUPTA.3216@gmail.com', 'A.K.GUPTA.3216');

  $mail->isHTML(true);
  $mail->Subject = 'Subject';
  $mail->Body = 'HTML message body in <b>bold</b> ';
  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  $mail->send();
  echo "Mail has been sent successfully!";
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
