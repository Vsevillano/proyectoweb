<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }

    public function portfolio() {
        return view('portfolio');
    }

    public function sistemas() {
        return view('sistemas');
    }

    public function desarrollo() {
        return view('desarrollo');
    }

    public function blog() {
        return view('blog');
    }

    public function contacto() {
        return view('contacto');
    }

    public function login() {
        return view('login');
    }

    public function postContacto(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('mails.contacto', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('victorianosevillano@gmail.com', 'Victoriano Sevillano');
            $message->subject($data['subject']);
        });

        Session::flash('success', '¡Gracias por contactar conmigo! Le responderé lo más brevemente posible.');

        return redirect('/contacto');
    }

    
}
