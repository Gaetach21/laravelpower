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

    public function pageContent2()
    {
    	return view('pages/domain_name');
    }

    public function pageContent3()
    {
    	return view('pages/cours');
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

	     public function chap1()
    {
    	return view('pages/chap1_introduction');
    }

    public function chap2()
    {
    	return view('pages/chap2_basic_routing');
    }

    public function chap3()
    {
    	return view('pages/chap3_controllers');
    }

    public function chap4()
    {
        return view('pages/chap4_les_vues_avec_blade');
    }

    public function chap5()
    {
        return view('pages/chap5_compiler_les_assets');
    }


}
