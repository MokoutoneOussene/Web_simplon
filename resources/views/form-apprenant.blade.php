@extends('include/header')

@section('content')

<h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
<h4>Enregistrer un Apprenant</h4>

<form action="{{url('ajouer-apprenant')}}" method="post" id="mt-form" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="colFormLabelSm" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabelSm" name="nom">
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" name="prenom">
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Date de naissance</label>
    <div class="col-sm-10">
      <input type="date" class="form-control form-control-lg" id="colFormLabelLg" name="date_naiss">
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Lieu de naissance</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" name="lieu_naiss">
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Situation matrimoniale</label>
    <div class="col-sm-10">
      <select class="form-control" name="matrimonial">
          <option value="Apprenant">Célibatire</option>
          <option value="Alumnis">Marié(e)</option>
          <option value="Alumnis">Compliqué</option>
        </select> 
    </div>
  </div><br><br>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Profession</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" name="profession">
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Statut</label>
    <div class="col-sm-10">
        <select class="form-control" name="status">
          <option value="Apprenant">Apprenant</option>
          <option value="Alumnis">Alumnis</option>
        </select> 
    </div>
  </div>
  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Entreprise</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel" name="entreprise">
    </div>
  </div>

  <div class="form-group col">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Entreprise</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="colFormLabel" name="photo">
    </div>
  </div>

  <div class="button">
        <button type="submit" class="btn btn-danger">Enregistrer</button>
        <button type="reset" class="btn btn-dark">Annuler</button>
  </div>
</form>

@endsection
