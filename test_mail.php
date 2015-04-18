<?php
$to      = 'kokyawphyonaing@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@kyawphyonaing.sakura.ne.jp' . "\r\n" .
    'Reply-To: webmaster@kyawphyonaing.sakura.ne.jp' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>