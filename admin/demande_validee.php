<body>
<?php include("base.php") ?>
<?php require_once('navbar.php') ?>
            <main class="dash-content">
          <div class="text-center p-5">
    <h4><b>Demandes validées</b></h3>
          </div>
  <table class="table">
  <thead class="table-secondary" >
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Noms</th>
      <th scope="col">Prénoms</th>
      <th scope="col">Marque de moto</th>
      <th scope="col">Action</th>
      <!--th scope="col">Actions</th-->
      
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>John</td>
      <td>Hajoue</td>


      <td>
        <button class="btn btn-primary">Voir</button>
        <button class="btn btn-success">Valider</button>


         
       </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Anicet</td>
      <td>Waves</td>


      <td>
        <button class="btn btn-primary">Voir</button>
        <button class="btn btn-success">Valider</button>


        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>John</td>
      <td>Yamaha</td>

      <td>
      <button class="btn btn-primary">Voir</button>
      <button class="btn btn-success">Valider</button>


        
        </td>
    </tr>
  </tbody>
  </tbody>
</table>

</body>

