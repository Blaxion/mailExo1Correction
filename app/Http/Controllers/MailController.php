<?php

namespace App\Http\Controllers;

use App\Mail\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public $details;
    public function contactus(Request $request){
        $details = [
            'content'=>$request->message
        ];
        Mail::to('dorianGEEEE@gmail.com')->send(new ContactUS ($details));
        return redirect()->back();
    }

    // Methode Oldschool
    public function contactusbis(Request $request){
        $this->details= [
            'content'=>$request->message,
            'subject'=>$request->subject,
        ];
        
        Mail::send('emails.contactUS_Bis',$this->details,function($message){
            $message
                ->to('dorianGEEEE@gmail.com')
                ->from(Auth::user()->email)
                ->subject($this->details['subject']);
                
        });
        return redirect()->back();
    }
}
