<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

header('Content-Type: application/json');

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = 'theloneranger241@gmail.com';
    $mail->Password = 'your_password';

    $mail->setFrom('no_reply@gmail.com', 'PhmTuns');
    $mail->addAddress('theloneranger241@gmail.com');
    $mail->Subject = 'Cô ấy đồng ý rồi!';
    $mail->Body = 'Cô ấy đã nhấn Đồng ý!';

    $mail->send();

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $mail->ErrorInfo]);
}

require 'vendor/autoload.php';