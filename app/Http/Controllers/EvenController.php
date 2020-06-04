<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;
use App\Evenement;

class EvenController extends Controller
{
    function affiche()
    {
        $actus=Actualite::all();
        return view('form-evenement',['liste_actualites'=>$actus]);
    }

    function listeven()
    {
        $even=Evenement::all();
        $actus=Actualite::all();
        return view('evenements',['listeeven'=>$even,'liste_actualites'=>$actus]);
    }

    function store(Request $request)
    {
        $even=new Evenement();
        $even->image=$request->image->store('photos','public');
        $even->description=$request->description;
        $even->date_debut=$request->date_debut;
        $even->date_fin=$request->date_fin;
        $even->save();
        return redirect('form-even');
    }
}
