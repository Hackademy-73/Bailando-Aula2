<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    
    public function welcome () {
        return view('welcome');
    }

    public function contact_us(){
        return view('contact-us');
    }

    public function send(Request $request){

        $name = $request->name;
        $email = $request->email;
        $letter = $request->letter;

        $mail = new ContactMail($name, $email, $letter);

        Mail::to($email)->send($mail);
        
        return redirect(route('contact_us'))->with('message', 'Mail inviata correttamente');

    }
}
