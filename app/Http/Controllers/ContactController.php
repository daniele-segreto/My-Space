<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact() {
        return view("contact");
    }

    public function contacts() {
        return view("contacts");
    }

    public function submit(StoreRequest $request) {
        // dd($request->all());
        // $name=$request->input("name");
        // $email=$request->input("email");
        // $message=$request->input("message");

        // $contact = compact("name", "email", "message");
        // $admin_mail = compact("name", "email", "message");

        // new Contact mi riporta ciò che ho su fillable, cioè name, email e message
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        
        // caro ogetto contact, all’interno del tuo attributo name/email/mesage, inseriscimi il dato che sta nell’ogetto request e prendimi il valore che arriva dall’input e che ha come name name/email/message

        Mail::to($contact->email)->send(new ContactMail($contact));
        Mail::to("adminDani@dani.it")->send(new AdminMail($contact));

        return redirect(route("home"))->with("message", "Grazie per averci scritto, il tuo messaggio è arrivato a destinazione!");
        // indirizza l’utente su una pagina che restituisce un messaggio

    }

}