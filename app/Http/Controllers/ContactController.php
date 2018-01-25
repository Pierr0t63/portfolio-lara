<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Msgcontact;

class ContactController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('contact');
    }

    public function contacter(contactRequest $request){
        $msgcontact = new Msgcontact();
        $msgcontact->category_id = $request->get('raison') ;
        $msgcontact->last_name = $request->nom ;
        $msgcontact->first_name = $request->prenom ;
        $msgcontact->email = $request->addrMail ;
        $msgcontact->phone = $request->tel ;
        $msgcontact->subject = $request->sujet ;
        $msgcontact->message = $request->msguser ;
        $msgcontact->save();

        Mail::to('kozluk.pierre@gmail.com')
              ->send(new Contact($request->except('_token')));


        if(count(Mail::failures()) > 0) {
            return redirect()->back()->with('errorsMail', 'Erreur lors de l\'envoi du message électronique, le message est a néanmoins été stocké dans la base de données.');

        } 
        else{
            return redirect()->back()->with('message', 'Message envoyé avec succès !');
        }
    }
}
