<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    /*public function index()
    {
    	return view('pages/newsletter');
    }*/

    public function store(Request $request)
	{ 
		  $request->validate([
		'mail' =>'required|email'
		]);

		  if (Newsletter::subscribe($request->mail,['FirstName'=>'thomas'],'aucun')) {
		  	return redirect('/')->with('success','Merci pour votre souscription à notre newsletter');
		  }
		  else{
		  	return redirect('/')->with('failure','Désolé! Vous déjà souscris à notre newsletter');
		  }
		  
		  

		  
		  
			

	}
}
