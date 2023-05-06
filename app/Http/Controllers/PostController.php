<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\MailForAdmin;
use Illuminate\Support\Facades\Mail;
use App\Models\Post;
use App\Models\Image;

class PostController extends Controller
{
    public function index()
    {
    	return view('pages/home');
    }

    public function articles()
    {
    	$posts = Post::all();
		return view('pages/articles',
		['posts'=>$posts]);
    }

    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('pages/article', 
            ['post' => $post
        ]);
    }

    public function createpost()
    {
        return view('pages/postform');
    } 

    public function storepost(Request $request)
    {
       $request->validate([
        'title' =>['required','min:5','max:255','unique:posts'],
        'content' =>['required']
        ]);

       $filename = time(). '.'.$request->avatar->extension();
       $path = $request->file('avatar')->storeAs(
        'avatars',
        $filename,
        'public'
       );

       $post=Post::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]); 

       $image = new Image();
       $image -> path = $path;
       $post->image()->save($image);
       return 'Votre article a été créé';
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


}
