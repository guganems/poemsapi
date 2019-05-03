<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller
{
    public function sendmail($recipient, $subject, $body){
        $mail = new PHPMailer;

//        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->Encoding = "base64";
        $mail->Mailer = "smtp";
        $mail->Port = 587;
        $mail->Host = "mail.ZZZ.com.ua";
        $mail->SMTPAuth = true;
        $mail->Username = "mail@poemsapi.ga";
        $mail->Password = "Gudu_lashi7";

        $mail->From = "mail@poemsapi.ga";
        $mail->FromName = "poemsapi.ga";
        $mail->addAddress("$recipient");
        $mail->Subject = "$subject";
        $mail->Body = "$body";

        if(!$mail->send()) {
            return 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            return 'Message has been sent';
        }
    }
}