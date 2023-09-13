<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required |email",
            "phone_number" => "required",
            "message" => "required"
        ]);


        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'justgokul93644@gmail.com';
            $mail->Password   = 'okeupkajnsnpxhsf';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->addAddress('info@ogconsultancy.org');
            $mail->setFrom($request['email'], $request['name']);
            $mail->AddReplyTo($request['email'], $request['name']);
            $mail->isHTML(true);
            $mail->Subject = 'OG CONSULTANCY CUSTOMER  FEEDBACK';
            $mail->Body    = "<B>USERNAME: </B> " . $request['name'] . "<br><br>" .
                "<B>EMAIL: </B> " . $request['email'] . "<br><br>" .
                "<b>MOBILE NUMBER: </b>" . $request["phone_number"] . "<br><br>" . "<b>FEEDBACK: </b> " .  $request["message"] . "<br><br>";
            $mail->send();
            return response(view("pages.feedback_success"), 200);
        } catch (Exception $e) {
           return redirect()->back();
        }
    }
}