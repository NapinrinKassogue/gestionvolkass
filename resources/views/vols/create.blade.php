@extends("/layoutvol.master") 
@section("contenu") 
 <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Appuyer ici pour enrégistrer un vol
</button> 


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Enrégistrement de nouveau vol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
                    <div class="form-group">
                        <label for="">Code_vol:</label>
                        <input type="text" name="code_vol" required="required" class="form-control" id="codevol" placeholder="Entrez code">
                    </div>
                    <div class="form-group">
                        <label for="">Destination:</label>
                        <input type="text" name="destination" required="required" class="form-control" id="destination" placeholder="Entrez destination">
                    </div>
                    <div class="form-group">
                        <label for="">Date_depart:</label>
                        <input type="date" name="date_depart" required="required" class="form-control" id="date" placeholder="choisir date">
                    </div>
                    <div class="form-group">
                        <label for="">Heure_depart:</label>
                        <input type="time" name="heure_depart" required="required" class="form-control" id="heure" placeholder="Entrez heure">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre_place_A:</label>
                        <input type="number" name="nombre_place_A" required="required" class="form-control" id="heure" placeholder="saisir nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre_place_B:</label>
                        <input type="number" name="nombre_place_B" required="required" class="form-control" id="heure" placeholder="saisir nombre pour place_B">
                    </div>
                    <div class="form-group">
                        <label for="">Prix_classe_A:</label>
                        <input type="text" name="prix_classe_A" required="required" class="form-control" id="heure" placeholder="entrez montant">
                    </div>
                    <div class="form-group">
                        <label for="">Prix_classe_B:</label>
                        <input type="text" name="prix_classe_B" required="required" class="form-control" id="heure" placeholder="saisir montant pour classe_B">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div> -->
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

<form action="{{ route('vols.store') }}" method="POST">
@csrf
    <label for="">Code_vol</label>
    <input type="text" name="code_vol" class="form-control"><br><br>
    <label for="">Destination</label>
    <input type="text" name="destination" class="form-control"><br><br>
    <label for="">Date_depart</label>
    <input type="date" name="date_depar" class="form-control"><br><br>
    <label for="">Heure_depart</label>
    <input type="time" name="heure_depart" class="form-control"><br><br>
    <label for="">Nombre_place_A</label>
    <input type="number" name="nombre_place_A" class="form-control"><br><br>
    <label for="">Nombre_place_B</label>
    <input type="number" name="nombre_place_B" class="form-control"><br><br>
    <label for="">Prix_classe_A</label>
    <input type="number" name="prix_classe_A" class="form-control"><br><br>
    <label for="">Prix_clase_B</label>
    <input type="number" name="prix_classe_B" class="form-control"><br><br>
    <input type="submit">
</form>
@endsection