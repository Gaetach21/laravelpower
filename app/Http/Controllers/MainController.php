<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\MailForAdmin;
use Illuminate\Support\Facades\Mail;




class MainController extends Controller
{
        public function index()
    {
    	return view('pages/home');
    } 

    	public function about()
    {
    	return view('pages/about');
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

    public function getHistory()
    {
    	return view('pages/historique');
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

    public function chap6()
    {
        return view('pages/chap6_Les_migrations');
    }

    public function chap7()
    {
        return view('pages/chap7_Les_factories');
    }

    public function chap8()
    {
        return view('pages/chap8_L\'ORM_Eloquent');
    }

    public function chap9()
    {
        return view('pages/chap9_Relation_One_To_Many');
    }

    public function chap10()
    {
        return view('pages/chap10_Relation_One_To_One');
    }

    public function chap11()
    {
        return view('pages/chap11_Relation_Many_To_Many');
    }

    public function chap12()
    {
        return view('pages/chap12_Relation_One_To_Many(Polymorphic)');
    }

    public function chap13()
    {
        return view('pages/chap13_Relation_Has_One_Through');
    }

    public function chap14()
    {
        return view('pages/chap14_Relation_Has_One_Of_Many');
    }

    public function chap15()
    {
        return view('pages/chap15_Les_requetes_HTTP');
    }

    public function chap16()
    {
        return view('pages/chap16_Validation_de_formulaire');
    }

    public function chap17()
    {
        return view('pages/chap17_Upload_de_fichiers');
    }

    public function chap18()
    {
        return view('pages/chap18_Authentification');
    }

    public function chap19()
    {
        return view('pages/chap19_Autorisation_avec_les_gates');
    }

    public function chap20()
    {
        return view('pages/chap20_Envoi_des_mails');
    }

    public function chap21()
    {
        return view('pages/chap21_Les_notifications');
    }

    public function chap22()
    {
        return view('pages/chap22_Les_middlewares');
    }

    public function chap23()
    {
        return view('pages/chap23_Soft_Deletes');
    }

    public function chap24()
    {
        return view('pages/chap24_Les_evenements');
    }

    public function chap25()
    {
        return view('pages/chap25_Les_composants_Blade');
    }

    public function chap26()
    {
        return view('pages/chap26_Les_routes_notions_avancees');
    }

    public function chap27()
    {
        return view('pages/chap27_HTTP_client');
    }

    public function chap28()
    {
        return view('pages/chap28_Les_observers');
    }

    public function chap29()
    {
        return view('pages/chap29_Les_jobs');
    }

    public function chap30()
    {
        return view('pages/chap30_Les_services_providers');
    }

    public function chap31()
    {
        return view('pages/chap31_un_systeme_de_commentaires');
    }

}
