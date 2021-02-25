<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmailToAdvertiser;
use App\Http\Requests\ContactRequest;

class SendMailController extends Controller
{
    public function sendMail(ContactRequest $user)
    {
        \Mail::to($user->adv_email)->send(new SendEmailToAdvertiser($user));

        return back();
    }
}
