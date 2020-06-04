@extends('include/header')

@section('content')
    <h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
    <h4>Enregistrer une Actualité</h4>

    <form action="{{url('ajout')}}" method="post" id="mt-form">
        @csrf
        <div class="row mb-4">
            <label>Titre:</label>
            <input type="text" class="form-control" name="titre" required>
        </div>

        <div class="row mb-4">
            <label>Description:</label>
            <input type="text" class="form-control" name="description" required>
        </div>

        <div class="row mb-4">
            <button type="submit" class="btn btn-dark mr-3">Enregistrer</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
        
    </form>
@endsection
