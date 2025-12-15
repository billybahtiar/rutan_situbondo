<?php

error_reporting(E_STRICT | E_ALL);

date_default_timezone_set('Etc/UTC');

require '../PHPMailerAutoload.php';

$mail = new PHPMailer;

$body = file_get_contents('contents.html');

$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
$mail->Port = 25;
$mail->Username = 'yourname@example.com';
$mail->Password = 'yourpassword';
$mail->setFrom('list@example.com', 'List manager');
$mail->addReplyTo('list@example.com', 'List manager');

$mail->Subject = "PHPMailer Simple database mailing list test";

//Same body for all messages, so set this before the sending loop
//If you generate a different body for each recipient (e.g. you're using a templating system),
//set it inside the loop
$mail->msgHTML($body);
//msgHTML also sets AltBody, but if you want a custom one, set it afterwards
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

// Database example removed to avoid raw mysqli usage in views.
// Use Laravel Eloquent/DB in your controller or a queued job instead. Example:
//
// use App\Models\MailingList;
// $rows = MailingList::where('sent', false)->get();
// foreach ($rows as $row) {
//     $mail->addAddress($row->email, $row->full_name);
//     if ($row->photo) {
//         $mail->addStringAttachment($row->photo, 'YourPhoto.jpg');
//     }
//
//     if ($mail->send()) {
//         $row->update(['sent' => true]);
//     }
//     $mail->clearAddresses();
//     $mail->clearAttachments();
// }
