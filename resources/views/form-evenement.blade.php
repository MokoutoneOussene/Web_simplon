@extends('include/header')

@section('content')
<h3 class="pt-3 pb-3">Bienvenue à Simplon Burkina</h3>
<h4>Enregistrer un évènement</h4>
<form action="{{url('ajouter-evenement')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="image" name="image">
    </div>
</div>

  <div class="form-group row">
    <label for="date_dedut" class="col-sm-2 col-form-label">Date de début</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date_dedut" name="date_dedut" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="date_fin" class="col-sm-2 col-form-label">Date de fin</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date_fin" name="date_fin" required>
    </div> <br> <br> <br>
    <div class="input-group">
 <label for="description">Descrtiption: </label>
  <textarea class="form-control" name="description" id="description" required ></textarea> <br> <br>
</div>

</div>
<div>
    <button  type="submit" class="btn btn-danger">Enregistrer</button>
    <button type="reset" class="btn btn-dark">Annuler </button>
 </div>
</form>

@endsection


