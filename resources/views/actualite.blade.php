@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4>Actualités de Simplon Burkina</h4>

 @foreach($liste_actualites as $actu)
  <div class="card d-flex">
    <div class="card-body">
      <h5 class="card-title text-center">{{$actu->titre}}</h5>
      <p class="card-text">{{$actu->description}}</p>
    </div>
  </div>
 @endforeach
    
@endsection
