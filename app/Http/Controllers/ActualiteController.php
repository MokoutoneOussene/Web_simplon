<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class ActualiteController extends Controller
{
    function creer()
    {
        $actus=Actualite::all();
        return view('form-actu',['liste_actualites'=>$actus]);
    }

    function list()
    {
        $actus=Actualite::all();
        return view('index',['liste_actualites'=>$actus]);
    }

    function store(Request $request)
    {
        $actu=new Actualite();
        $actu->titre=$request->titre;
        $actu->description=$request->description;
        $actu->save();
        return redirect('form-actu');
    }
}
