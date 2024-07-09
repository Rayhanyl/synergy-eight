<?php

namespace App\Http\Controllers\Email;

use Carbon\Carbon;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class EmailController extends Controller
{
    public function sendmail(Request $request)
    {
        try {
            $mailData = [
                "name" => $request->name,
                "company" => $request->company,
                "email" => $request->email,
                "phone_number" => $request->phone_number,
                "message" => $request->message,
                "date" => Carbon::now(),
            ];
            Mail::to($request->email)->send(new ContactMail($mailData));
            Alert::toast('Terimakasih', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Gagal mengirim email', 'danger');
            return redirect()->back();
        }
    }
}
