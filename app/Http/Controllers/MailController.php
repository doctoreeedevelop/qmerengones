<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function store(Request $request)
    {
        //dd($request);

        Mail::Send('emails.contact', $request->all(), function($smj)
        {
            
            $smj->subject('Correo de Contacto');
            $smj->to('doctoreeedevelop@gmail.com');

        });
        
        Session::flash('message', 'Mensaje Enviado Correctamente');
        return redirect()->route('nosotros');
    }

    public function getMail()
    {
            $data = ['name' => 'mauricio'];
            Mail::to('nelsondavidecheverry@gmail.com')->send(new TestMail($data));
    }
}
