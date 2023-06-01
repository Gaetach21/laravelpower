<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Events\PostCreatedEvent;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts/articles',
        ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts/createposts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
       event(new PostCreatedEvent($post));
       // return 'Votre article a été créé';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        return view('posts/article', 
            ['post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts/editposts', 
            ['post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'title' =>['required','min:5','max:255'],
        'content' =>['required']
        ]);


    Post::whereId($id)->update($validatedData);

    return redirect('/gestion/articles')->with('success', 'Article mis à jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::findOrFail($id);
    $post->delete();

    return redirect('/gestion/articles')->with('success', 'Article supprimé avec succes'); 
    }
}
