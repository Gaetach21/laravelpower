<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\MailForAdmin;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{

    public function createContact()
    {
    	return view('pages/contact');
    }

    public function storeContact(Request $request)
	{ 
$request->validate([
		'name' =>'required|min:4|max:10|unique:contacts',
		'email' =>'required|email',
		'message' =>'required|max:250'
		]);
		Mail::to('tachgaetan@gmail.com')->send(new MailForAdmin());
		Contact::create([
		'name' => $request -> name,
		'email' =>$request -> email,
		'message' => $request -> message
		]);
		return redirect()->back()->with('success','Votre message a été transmis à l\'administrateur du site.
		Vous recevrez une réponse rapidement');
			

	}

}
