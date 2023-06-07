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
	<div class="header">
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
				<a class="nav-link" href="statut_demande.php">Statut de demande</a>
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


<div class="container hero m-5 text-center p-5" style="font-weight:800;">
	<h3 class="" style="font-size:25px;font-weight:800; padding-top:100px; margin-right:-100px"> BIENVENUE SUR LA PLATEFORME IMMAAPP </h3>
     <p style="margin-right:-100px"><i>Révolutionnez votre immatriculation de moto en ligne</i></p>
	
</div>
</div>
<div class="demande-service m-5" id="demande">
	<div class="row">
		<h5 style="font-size: 20px; font-weight:900">Quel document souhaitez vous demander ?</h5>

		<div class="col-lg-6 col-md-6 col-sm-12 shadow p-5" >
				<b>
				<div style="padding-bottom: 20px;"><input type="radio" name="demande" style="transform:scale(1.5);"id="immatriculation" class="m-2"><label>Demande d'immatriculation</label></div>
				<div style="padding-bottom: 20px;"><input type="radio" name="demande" style="transform:scale(1.5);"id="duplicata" class="m-2"><label>Demande de duplicata de la carte grise</label></div>
				</b>
                <div class="btn-submit" style="float:right;" >
				<button  class="btn btn-secondary ml-5" id="submit" disabled > OBTENIR <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				
			</div>


		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			
				<div id="d_immatriculation" style="display:none">
					<h6>PREMIERE IMMATRICULATION DE MOTO </h6>
					<ul>
						<li>La quittance de recette ANaaT ou BOA de 11500 fcfa</li>
						<li>Feuillet de reception </li>
						<li>Facture <strong>normalisée </strong>d'achat (originale)</li>
						<li>Les papiers de douane (originale)</li>
						<li>Une copie légalisée de la pièce nationale d'identité ou une copie simple du CIP</li>
						<li>Une copie simple de l'attestation  d'immatriculation IFU pour les structures</li>
						<li>Une atestation de résidence pour les étrangers</li>
						<li>La moto elle meme (obligatoire)</li>
					</ul>
				  </div>
				<div id="d_duplicata" style="display:none">
					<h6>DUPLICATA OU REMPLACEMENT CARTE GRISE DE MOTO</h6>
					<ul class="mt-4">
						<li>Un certificat de perte ou la carte grise à remplacer</li>
						<li>Une photocopie légalisée de la carte d'identité légalisée de une copie simple du CIP</li>
						<li>Quittance BOA de 7000 f au nom du propriétaire</li>
						<li>Feuillet de reception</li>
						<li>La moto elle meme</li>
					</ul>
				</div>
			</div>
      

		</div>
	</div>
</div>


<br>
<div class="container contact_info p-3" id="contact">
	<p>
Pour toutes questions ou préoccupations sur les services de l'ANIP, veuillez nous contacter aux :<br>
<br>
Fixe : (+229) 210000001<br>
Moov : (+229) 68789492 (Appels & WhatsApp)<br>
MTN : (+229) 90943999 (Appels & WhatsApp)<br>
Email : info@immappp.bj<br>
<br>
	</p>
</div>
<footer class="bg-secondary p-4 text-light text-center fixed"><h6>&copy 2023 IMMAAPP | Menard & Pernelle </h6></footer>

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

  
  function handleButtonClick() {
	if (immatriculationRadio.checked) {
	  window.location.href = 'nouvelle_demande.php'; // Redirect to nouvelle_demande.html
	}
	}
	submitButton.addEventListener('click', handleButtonClick);


	function handleButton2Click() {
		if (duplicataRadio.checked) {
		  window.location.href = 'duplicata.html'; // Redirect to nouvelle_demande.html
		}
		}
	
submitButton.addEventListener('click', handleButton2Click);




  
	
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</head>
</html>