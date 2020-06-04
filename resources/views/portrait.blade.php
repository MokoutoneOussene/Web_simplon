@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4>Nos Apprenants</h4>

@foreach($liste_appren as $appren)

  <!-- <div class="card" style="width: 25rem;">
  <img src="{{asset('storage').'/'.$appren->photo}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$appren->nom}} {{$appren->prenom}}</h5>
    <a href="{{url('Portrait Apprenant')}}" class="btn btn-primary">Tous savoir</a>
  </div>
</div>
</div>
</div> -->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection