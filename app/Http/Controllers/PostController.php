<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\MailForAdmin;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function index()
    {
    	return view('pages/home');
    }

    public function pageContent1()
    {
    	return view('pages/hebergement');
    }

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
		/*Contact::create([
		'name' => $request -> name,
		'email' =>$request -> email,
		'message' => $request -> message
		]);*/
		return 'Merci <strong>'.$request->input('name').'</strong>.'.'Votre message a été transmis à l\'administrateur du site.
		Vous recevrez une réponse rapidement';	

}


}
