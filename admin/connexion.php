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

<?php
 session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
if (isset($_SESSION['admin_id'])) {
    header('Location: index.php');
    exit;
}



// Vérification des informations de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    
    // Vérifier si les informations de connexion sont valides
    $conn = mysqli_connect("localhost", "root", "", "ImmaApp_db");
    $sql = "SELECT * FROM admins WHERE email = '$email' AND mot_de_passe = '$mot_de_passe'";
    $result = $conn->query($sql);
    
// Définir les valeurs prédéfinies pour l'email et le mot de passe de l'administrateur
$email = "admin@example.com";
$mot_de_asse = "admin";
$motDePasseHash = password_hash($mot_de_passeasse, PASSWORD_DEFAULT);
// Utiliser une requête SQL pour insérer les valeurs dans la table des administrateurs
$sql = "INSERT INTO admins (email, mot_de_passe) VALUES ('$email', '$motDePasseHash ')";

if (mysqli_query($conn, $sql)) {
    echo "Enregistrement de l'administrateur réussi.";
} else {
    echo "Erreur lors de l'enregistrement de l'administrateur : " . mysqli_error($conn);
}

// Fermer la connexion à la base de données
mysqli_close($conn);

    if ($result->num_rows > 0) {
        // Connexion réussie
        header('Location: index.php');

    
    } else {
        // Identifiants invalides
         $error_m = "Identifiants invalides. Veuillez réessayer.";
         header('Location: index.php');

    }
}


?>







                                

<body>
<div class="p-3 mb-2 bg-secondary text-white">
    <div class="form-screen  " >
    <div class="p-3 mb-2 bg-secondary text-white"><img src="../assets/images/logo.png" width="100px" ></div>
        
        <div class="card account-dialog">
            <div class="card-header bg-info text-white">Connexion administrateur </div>
            <div class="card-body">
        <p class="text-danger"></p>
                <form action="connexion.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="mot_de_passe" placeholder="mot de passe">
                    </div>
                    <div class="form-group btn btn-info">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Souviens de moi</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-info">Se connecter</button>
                        </div>
                       

                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.b/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/easion.js"></script>
</body>ootstrapcdn.com/bootstrap/4.3.1

</html>