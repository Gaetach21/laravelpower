<?php

namespace App\Http\Controllers\Download;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Download;
use App\Models\ImageToDownload;
use App\Models\Software;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = Download::all();
        return view('downloads/logiciels',
        ['downloads'=>$downloads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('downloads/create');
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
        'title' =>['required','min:5','max:255','unique:downloads'],
        'content' =>['required']
        ]);

       $filename = time(). '.'.$request->avatar->extension();
       $pathImage = $request->file('avatar')->storeAs(
        'avatars',
        $filename,
        'public'
       );

       $name = $request->programfile->getClientOriginalName();
       $pathProgram = $request->file('programfile')->storeAs(
        'programmes',
        $name,
        'public'
       );

       $download=Download::create([
            'title'=>$request->title,
            'content'=>$request->content
        ]); 

       $image = new ImageToDownload();
       $image -> path = $pathImage;
       $download->imagetodownload()->save($image);

       $software = new Software();
       $software -> path = $pathProgram;
       $download->software()->save($software);

       return redirect('/gestion/logiciels')->with('success', 'Votre téléchargement a été ajouté');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $download=Download::findOrFail($id);
        return view('downloads/logiciel', 
            ['download' => $download
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
        $download=Download::findOrFail($id);
        return view('downloads/edit', 
            ['download' => $download
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


    Download::whereId($id)->update($validatedData);

    return redirect('/gestion/logiciels')->with('success', 'Téléchargement mis à jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $download = Download::findOrFail($id);
    $download->delete();

    return redirect('/gestion/logiciels')->with('success', 'Téléchargement supprimé avec succes'); 
    }

}
