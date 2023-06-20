<?php
/*session_start();
if(isset($_SESSION['login'])){
  header('location:index.php');
}
else{
  header('location: connexion.php');
}*/
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/js/chart-js-config.js"></script>
    <title>ImmaApp</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                
            </header>
    
    
            <?php require_once('navbar.php') ?>

        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="../index_accueil.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">

            <div class="text-center p-5">
    <h4><b>Demandes rejetées</b></h3>
  </div>
  <table class="table">
  <thead class="table-secondary">
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Noms</th>
      <th scope="col">Prénoms</th>
      <th scope="col">Marque de moto</th>
      <th scope="col">Observation</th>
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
      <button class="btn btn-success">Motif</button>
        


        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td></td>
      <td></td>
      <td>
      <button class="btn btn-primary">Voir</button>
      <button class="btn btn-success">Motif</button>

        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td></td>
      <td></td>
      <td>
      <button class="btn btn-primary">Voir</button>
      <button class="btn btn-success">Motif</button>
      </td>
    </tr>
  </tbody>
  </tbody>
</table>

<script>
  function showDocuments() {
    $('#documents').removeClass('hidden');
  }
</script>

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

              


            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/easion.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Menard Pernelle">
	<title>Demande en attente- ImmaApp</title>

	<!--style de css-->
	<link  rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <body>
    
  
</head>
</html>