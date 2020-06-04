<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualite;

class PageActuController extends Controller
{
    public function index(){
        $actus=Actualite::all();
        return view('actualite',['liste_actualites'=>$actus]);
    }
}
