<body>
<?php include("base.php") ?>
<?php require_once('navbar.php') ?>

        
        <main class="dash-content">

            <div class="text-center p-5">
    <h4><b>Demandes en attente</b></h3>
  </div>
  <table class="table">
  <thead class="table-secondary">
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
      <td></td>
      <td></td>
      <td>
      <button class="btn btn-primary">Voir</button>
        <button class="btn btn-success">Valider</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Rejeter</button>


        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td></td>
      <td></td>
      <td>
        <button class="btn btn-primary">Voir</button>
        <button class="btn btn-success">Valider</button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Rejeter</button>


        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td></td>
      <td></td>
      <td>
      <button class="btn btn-primary">Voir</button>
      <button class="btn btn-success">Valider</button>
      <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Rejeter</button>
      </td>
    </tr>
  </tbody>
  </tbody>
</table>
<!-- Le modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- En-tête du modal -->
      <div class="modal-header">
        <h4 class="modal-title">Motif</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Contenu du modal -->
      <div class="modal-body">
        <!-- Ajoutez ici le contenu du modal -->
        <p>Entrez ici le motif.</p>
      </div>

      <!-- Pied du modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Confirmer</button>
      </div>
      

    </div>
  </div>
</div>



<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupérer l'ID de la demande soumise
    $demandeID = $_POST["demandeID"];
    
    // Vérifier quelle action a été sélectionnée
    if (isset($_POST["valider"])) {
        // Action: Valider la demande
        validerDemande($demandeID);
    } elseif (isset($_POST["rejeter"])) {
        // Action: Rejeter la demande
        rejeterDemande($demandeID);
    } elseif (isset($_POST["voir"])) {
        // Action: Afficher les informations de la demande
        afficherInformations($demandeID);
    }
}

// Fonction pour valider une demande
function validerDemande($demandeID) {
    // Effectuer les opérations nécessaires pour valider la demande
    // ...
    echo "Demande $demandeID validée avec succès.";
}

// Fonction pour rejeter une demande
function rejeterDemande($demandeID) {
    // Effectuer les opérations nécessaires pour rejeter la demande
    // ...
    echo "Demande $demandeID rejetée.";
}

// Fonction pour afficher les informations d'une demande
function afficherInformations($demandeID) {
    // Récupérer les informations de la demande (ex. depuis une base de données)
    global $demandes;
    $demande = null;
    foreach ($demandes as $item) {
        if ($item["id"] == $demandeID) {
            $demande = $item;
            break;
        }
    }
    
    // Afficher les informations de la demande
    if ($demande) {
        echo "Informations de la demande $demandeID :";
        echo "<br>Nom : " . $demande["nom"];
        echo "<br>Prénom : " . $demande["prenom"];
        echo "<br>Age : " . $demande["age"];
    } else {
        echo "Demande introuvable.";
    }
}

// Afficher le tableau des demandes en attente
echo "<table>";
echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Actions</th></tr>";
foreach ($demandes as $demande) {
    echo "<tr>";
    echo "<td>" . $demande["id"] . "</td>";
    echo "<td>" . $demande["nom"] . "</td>";
    echo "<td>" . $demande["prenom"] . "</td>";
    echo "<td>";
    echo "<form method='POST'>";
    echo "<input type='hidden' name='demandeID' value='" . $demande["id"] . "'>";
    echo "<input type='submit' name='voir' value='Voir'>";
    echo "<input type='submit' name='valider' value='Valider'>";
    echo "<input type='submit' name='rejeter' value='Rejeter'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
<!--script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script-->

              


            </main>
        </div>
    </div>