<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
use App\Apprenant;

class ApprenantController extends Controller
{
    function affiche()
    {
        $actus=Actualite::all();
        return view('form-apprenant',['liste_actualites'=>$actus]);
    }

    function list_appren()
    {
        $appren=Apprenant::where('status','=', "Apprenant")->get();
        $actus=Actualite::all();
        return view('apprenants',['liste_appren'=>$appren,'liste_actualites'=>$actus]);
    }

    
    function list_alumni()
    {
        $appren=Apprenant::where('status','=', "Alumnis")->get();
        $actus=Actualite::all();
        return view('alumni',['liste_alumni'=>$appren,'liste_actualites'=>$actus]);
    }


    function list_portrait()
    {
        $appren=Apprenant::all();
        $actus=Actualite::all();
        
    return view('portrait',['liste_appren'=>$appren,'liste_actualites'=>$actus]);
    }

    function store(Request $request)
    {
        $appren=new Apprenant();
        $appren->nom=$request->nom;
        $appren->prenom=$request->prenom;
        $appren->date_naiss=$request->date_naiss;
        $appren->lieu_naiss=$request->lieu_naiss;
        $appren->matrimonial=$request->matrimonial;
        $appren->profession=$request->profession;
        $appren->status=$request->status;
        $appren->entreprise=$request->entreprise;
        $appren->photo=$request->photo->store('photos','public');
        $appren->save();
        return redirect('form-apprenant');
    }
}
