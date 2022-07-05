@extends("layoutvol.master")
@section("contenu")
<div class="container">
<table class="table table-bordered mt-5">
    
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Code_vol</th>
      <th scope="col">Destination</th>
      <th scope="col">Date_depart</th>
      <th scope="col">Heure_depart</th>
      <th scope="col">Nbr_place_A</th>
      <th scope="col">Nbr_place_B</th>
      <th scope="col">Prix_classe_A</th>
      <th scope="col">Prix_classe_B</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
 
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>v8</td>
      <td>Washington</td>
      <td>20/07/2022</td>
      <td>23H</td>
      <td>12</td>
      <td>22</td>
      <td>1100000</td>
      <td>900000</td>
      <td>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Modifier</a></li>
    <li><a class="dropdown-item" href="#">Supprimer</a></li>
    
  </ul>
</div>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>v9</td>
      <td>ok</td>
      <td>23/07/2022</td>
      <td>6H</td>
      <td>8</td>
      <td>16</td>
      <td>700000</td>
      <td>600000</td>
      <td>
      <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Modifier</a></li>
    <li><a class="dropdown-item" href="#">Supprimer</a></li>
    
  </ul>
</div>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>v11</td>
      <td>Filadelfi</td>
      <td>30/07/2022</td>
      <td>3h</td>
      <td>21</td>
      <td>42</td>
      <td>2000000</td>
      <td>1500000</td>
      <td>
      <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Modifier</a></li>
    <li><a class="dropdown-item" href="#">Supprimer</a></li>
    
  </ul>
</div>
      </td>
    </tr>
  </tbody>
  <a href=""><button  type="button" class="btn btn-success float-end mb-2">Ajouter un nouveau vol</button></a>
</table>
</div>

@endsection
