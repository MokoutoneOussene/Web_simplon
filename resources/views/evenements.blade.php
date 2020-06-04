@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4 class="mellar">NOS EVENEMENTS</h4>

@foreach($listeeven as $even)
  <div class="card mb-3">
  <img src="{{asset('storage').'/'.$even->image}}" class="card-img-top card-evenement" alt="...">
  <div class="card-body">
    <h5 class="card-title contenu-des-cartes" ><span class="portrait">{{$even->nom}}</h5></span>
    <p class="card-text contenu-des-cartes"><span class="portrait">Description {{$even->description}}</p></span>
    <p class="card-text contenu-des-cartes"><span class="portrait">{{$even->date_debu}}</p></span>
    <p class="card-text contenu-des-cartes"><span class="portrait">Date: {{$even->date_fin}}</p></span> 
  </div>
</div>
@endforeach

@endsection