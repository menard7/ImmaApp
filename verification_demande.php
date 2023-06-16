

<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les valeurs des champs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $lieu_naissance = $_POST["lieu_naissance"];
    $sexe = $_POST["sexe"];
    $ville = $_POST["ville"];
    $fonction = $_POST["fonction"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $numero_chasie = $_POST["numero_chasie"];
    $numero_moteur = $_POST["numero_moteur"];
    $couleur = $_POST["couleur"];
    $adresse = $_POST["adresse"];
    $piece = $_FILES["piece"];
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ImmaApp_db";

$conn = new mysqli($servername, $username, $password, $dbname);


// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
$reference=time();
// Préparer la requête d'insertion
$stmt = $conn->prepare("INSERT INTO demande (reference,nom, prenom, date_naissance, lieu_naissance, sexe, ville, fonction, telephone, email, marque, modele, numero_chasie, numero_moteur, couleur, adresse, piece) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");

// Vérifier si la préparation de la requête a échoué
if (!$stmt) {
    die("Erreur de préparation de la requête : " . $conn->error);
}



$demande_id = $conn->insert_id;
// Vérifier si un fichier a été soumis
if (!empty($_FILES['piece'])) {
    $file = $_FILES['piece'];

    // Récupérer les informations sur le fichier
    $filenamefirst = $file['name'];
    $newFilename = $demande_id . '_' . str_replace(' ', "_", pathinfo($filenamefirst, PATHINFO_FILENAME)) . '.' . pathinfo($filenamefirst, PATHINFO_EXTENSION);

    $filename = $newFilename;
    $filetmp = $file['tmp_name'];
    $filetype = $file['type'];
    $filesize = $file['size'];

    $destination = "pieces/" . $filename;
echo $reference;
    // Déplacer le fichier vers l'emplacement de destination
    if (move_uploaded_file($filetmp, $destination)) {
        // Insérer le chemin du fichier dans la base de données
            
    } else {
        echo "Erreur lors du déplacement du fichier.";
    }
}

// Fermer la requête et la connexion
$stmt->close();
$conn->close();


?>