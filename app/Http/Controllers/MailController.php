<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail($recipient, $subject, $body) {
//        mail($recipient, $subject, $body);

        return "Sent successfully";
    }
}