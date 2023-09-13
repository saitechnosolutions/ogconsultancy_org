<?php

namespace App\Http\Controllers;

use App\Models\RegistrationApplicaton;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class RegistrationApplicationController extends Controller
{
    public function index(Request $request)
    {
        try {
            $validated =     $request->validate([
                "branch_name" => "required",
                "user_name" => "required",
                "passport_number" => "required",
                "contact_number" => "required",
                "whatsapp_number" => "required",
                "marketing_officer_name" => "required",
                "service_description_id" => "required",
                "mou_number" => "required",
                "mail_id" => "required",
                "invoice_number" => "required",
                "recipt_upload" => "required",
                "passport_upload" => "required",
                "residential_address" => "required",
            ]);
        } catch (ValidationException $exception) {
            return  response($exception->getMessage());
        }

        if ($request->hasFile("recipt_upload") && $request->hasFile("passport_upload")) {
            $reciptFile = $request->file("recipt_upload");
            $reciptFileName = rand(1, 10000000) . "-" . $reciptFile->getClientOriginalName();
            $reciptFile->move(public_path('assets/regApp/recipt/'), $reciptFileName);
            $passportFile = $request->file("passport_upload");
            $passportFileName = rand(1, 10000000) . "-" . $passportFile->getClientOriginalName();
            $passportFile->move(public_path('assets/regApp/passport/'), $passportFileName);
            RegistrationApplicaton::create([...$validated, "recipt_upload" => $reciptFileName, "passport_upload" => $passportFileName]);
        }

        $msgBody = view("sections.emai_template", ["datas" => $request->all()])->render();

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
            $mail->addAddress($request["mail_id"]);
            // $mail->addAddress('gangatharanm.sts@gmail.com');
            $mail->setFrom($request["mail_id"], $request['user_name']);
            $mail->AddReplyTo($request["mail_id"], $request['user_name']);
            $mail->isHTML(true);
            $mail->Subject = 'Registration Application';
            $mail->addAttachment(public_path("assets/regApp/recipt/" . $reciptFileName));
            $mail->addAttachment(public_path("assets/regApp/passport/" . $passportFileName));
            $mail->Body    = $msgBody;
            $mail->send();
            return redirect()->back()->with("success", "Thank you form submitted successfully");
        } catch (Exception $e) {
            return redirect()->back()->with("errors", $e->errorMessage());
        }
    }
}