<?php

namespace App\Http\Controllers;

use App\Mail\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Methode Moderne
    public function contactus(Request $request){
        $details = [
            'message'=>$request->message
        ];
        Mail::to('dorianGEEEE@gmail.com')->send(new ContactUS ($details));
        return redirect()->back();
    }

    // Methode Oldschool
    public function contactusbis(Request $request){
        $details = [
            'message'=>$request->message,
            'subject'=>$request->subject,
        ];
        Mail::send('emails.contactUS_Bis',$details,function($message){
            $message
                ->to('dorianGEEEE@gmail.com')
                ->from(Auth::user()->email)
                ->subject($details['subject']);
                
        });
        return redirect()->back();
    }
}
