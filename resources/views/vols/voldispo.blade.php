@extends("layoutvol.master")
@section("contenu") 


    <div class="mybleau">
    <table class="styletab">
        <thead>
           
            <tr>
               <th>#</th>
                <th>Code_vol</th>
                <th>Destination</th>
                <th>Date_depart</th>
                <th>Date_depart</th>
                <th>Nombre_classe_A</th>
                <th>Nobre_classe_B</th>
                <th>Prix_classe_A</th>
                <th>Prix_classe_B</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($vols as $welcome)
        <tr>
          <td>{{$welcome-> id}}</td>
          <td>{{$welcome-> code_vol}}</td>
          <td>{{$welcome-> destination}}</td>
          <td>{{$welcome-> date_depart}}</td>
          <td>{{$welcome-> heure_depart}}</td>
          <td>{{$welcome-> nombre_place_A}}</td>
          <td>{{$welcome-> nombre_place_B}}</td>
          <td>{{$welcome-> prix_classe_A}}</td>
          <td>{{$welcome-> prix_classe_B}}</td>
          <td>
          
          <!-- <a href="/details" class="btn btn-info m-2">Details</a >
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           Réserver
            </button>  -->
            <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Modifier</a></li>
    <li><a class="dropdown-item" href="#">Supprimer</a></li>
    <li><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           Réserver
            </button></li>
    <li><a class="dropdown-item" href="#">Details</a></li>
    
  </ul>
</div>
  </div>
</div>
         </td>
      </tr>
      

<!-- PARTIE RESERVATION -->
<link rel="stylesheet" href="gerer.css">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Réservation des places</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
                    <div class="form-group">
                        <label for="">Numéro de pièce:</label>
                        <input type="text" name="num_piece" required="required" class="form-control" id="" placeholder="Entrez votre numéro de pièce">
                    </div>
                    <div class="form-group">
                        <label for="">Nom passager:</label>
                        <input type="text" name="nompass" required="required" class="form-control" id="" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="">Prénom passager:</label>
                        <input type="text" name="prenompass" required="required" class="form-control" id="" placeholder="Entrez votre prénom"><br>
                    </div>
                    <div class="form-group">
                    <label for="">Sexe passager:</label>
                    <select name="" id="">
                             <option value="">Féminin</option>
                             <option value="">Masculin</option>
                        </select><br><br>
                    </div>
                    <div class="form-group">
                    <label for="">Choix de la place:</label>
                    <select name="" id="">
                            <option value="">Classe_A</option>
                            <option value="">Classe_B</option>
                        </select><br><br>
                    </div>
                    <div class="form-group">
                        <label for="">Codel_vol:</label>
                        <input type="text" name="code_vol" required="required" class="form-control" id="" placeholder="saisir code vol">
                    </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-success">Réserver</button>
      </div>
    </div> 
   
      @endforeach
        </tbody>
    </table>
 </div>
 </body>
</html>
@endsection