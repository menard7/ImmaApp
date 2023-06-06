<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Menard Pernelle">
	<title>Accueil- ImmaApp</title>

	<!--style de css-->
	<link  rel="stylesheet" href="style.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
<body>
	
		<!--nav-->
	  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><img src="assets/images/logo.png" width="100px" alt="logo immappp"></a>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
			  
			  <li class="nav-item">
				<a class="nav-link" href="#demande">Nouvelle demande </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Statut de demande</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#contact"> Contact</a>
			  </li>

			  <li class="nav-item">
				<a class="nav-link"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
<br>
      <div class="text-center p-5"><h4><b>Demande de document : immatriculation de moto</b></h3></div>
<hr>
<div class="container">
    
    <div class="row">
        <div class="col-lg-8 shadow p-3">
            <div class="container">
                <h3>Formulaire de demande</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group"><br>
                      <label for="nom">Nom :</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                    </div>
                    <div class="form-group"><br>
                      <label for="prenom">Prénom :</label>
                      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
                    </div>
                    <div class="form-group"><br>
                      <label for="date_naissance">Date de naissance :</label>
                      <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                    </div>
                    <div class="form-group"><br>
                      <label for="lieu_naissance">Lieu de naissance :</label>
                      <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" placeholder="Lieu de naissance">
                    </div>
                    <div class="form-group"><br>
                      <label for="sexe">Sexe :</label>
                      <select class="form-control" id="sexe" name="sexe">
                        <option value="">Sélectionnez</option>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"><br>
                      <label for="ville">Ville :</label>
                      <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville">
                    </div>
                    <div class="form-group"><br>
                      <label for="fonction">Fonction :</label>
                      <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Votre fonction">
                    </div>
                    <div class="form-group"><br>
                      <label for="telephone">Numéro de téléphone :</label>
                      <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Numéro de téléphone">
                    </div>
                    <div class="form-group"><br>
                      <label for="email">Adresse email :</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email">
                    </div>
                    <div class="form-group"><br>
                      <label for="marque">Marque de moto :</label>
                      <input type="text" class="form-control" id="marque" name="marque" placeholder="Marque de moto">
                    </div>
                  </div>
                </div><br>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="modele">Modèle de moto :</label>
                      <input type="text" class="form-control" id="modele" name="modele" placeholder="Modèle de moto">
                    </div><br>
                    <div class="form-group">
                      <label for="numero_serie">Numéro de série :</label>
                      <input type="text" class="form-control" id="numero_serie" name="numero_serie" placeholder="Numéro de série">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="numero_moteur">Numéro de moteur :</label>
                      <input type="text" class="form-control" id="numero_moteur" name="numero_moteur" placeholder="Numéro de moteur">
                    </div><br>
                    <div class="form-group">
                      <label for="couleur">Couleur de moto :</label>
                      <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Couleur de moto">
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="adresse">Adresse :</label>
                  <textarea class="form-control" id="adresse" name="adresse" placeholder="Votre adresse"></textarea>
                </div><br>
                <div class="form-group">
                  <label for="piece">Pièces à fournir:</label>
                  <input type="file" class="form-control" name="piece[]" id>
                </div><br>
                  
                <button type="submit" class="btn btn-secondary w-25 text-uppercase" style="float: left;">Précédent </button>
                <button type="submit" class="btn btn-secondary w-25 text-uppercase" style="float: right;">Suivant </button>
              </div>
              

        </div>
        <div class="col-lg-4 bg-secondary p-2" >
            <p class="text-center text-light"><i class="fa fa-question-circle" aria-hidden="true"></i>A propos de ce service
        <hr>

        </div>


    </div>
</div>













<footer class="bg-secondary p-4 text-light text-center"><h6>&copy 2023 IMMAAPP | Menard & Pernelle </h6></footer>

<script>// Get the radio buttons and the button element
	var immatriculationRadio = document.getElementById('immatriculation');
	var duplicataRadio = document.getElementById('duplicata');
	var submitButton = document.getElementById('submit');
	var dImmatriculationDiv = document.getElementById('d_immatriculation');
    var dDuplicataDiv = document.getElementById('d_duplicata');

	
	// Function to check if either radio is selected
	function checkRadios() {
	  if (immatriculationRadio.checked || duplicataRadio.checked) {
		submitButton.disabled = false;
		submitButton.classList.remove('danger');
	  } else {
		submitButton.disabled = true;
		submitButton.classList.add('danger');
	  }
	}
	
	// Add event listeners to the radio buttons
	immatriculationRadio.addEventListener('change', checkRadios);
	duplicataRadio.addEventListener('change', checkRadios);

	// Function to handle radio button change event
function handleRadioChange() {
	if (immatriculationRadio.checked) {
	  dImmatriculationDiv.style.display = 'block';
	  dDuplicataDiv.style.display = 'none';
	} else if (duplicataRadio.checked) {
	  dImmatriculationDiv.style.display = 'none';
	  dDuplicataDiv.style.display = 'block';
	}
  }
  
  // Add event listeners to the radio buttons
  immatriculationRadio.addEventListener('change', handleRadioChange);
  duplicataRadio.addEventListener('change', handleRadioChange);
  
	
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</head>
</html>