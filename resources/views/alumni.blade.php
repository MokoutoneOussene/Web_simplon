@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4>Nos Alumnis</h4>

@foreach($liste_alumni as $appren)
<div class="arme"> 
  <div class="card" style="width: 25rem;">
    <img src="{{asset('storage').'/'.$appren->photo}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$appren->nom}} {{$appren->prenom}}</h5>
        <h5 class="card-title">{{$appren->entreprise}}</h5>
        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">Savoir plus</button>
      </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Portrait de {{$appren->nom}} {{$appren->prenom}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="c-portrait"> <span class="portrait">Date de naissance</span> {{$appren->date_naiss}}</p>
        <p class="c-portrait"><span class="portrait">Lieu de naissance</span>{{$appren->lieu_naiss}}</p>
        <p class="c-portrait"><span class="portrait">Profession</span>{{$appren->profession}}</p>
        <p class="c-portrait"><span class="portrait">entreprise</span>{{$appren->lieu_naiss}}</p>
        <p class="c-portrait"><span class="portrait">Situation matrimoniale</span>{{$appren->matrimonial}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
