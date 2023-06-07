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


// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Se connecter à la base de données
    $conn = mysqli_connect("localhost", "root", "", "ImmaApp_db");

    // Vérifier la connexion à la base de données
    if (!$conn) {
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());
    }

    // Requête SQL pour récupérer l'administrateur avec l'email spécifié
    $query = "SELECT * FROM admins WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $admin = mysqli_fetch_assoc($result);

        // Vérifier le mot de passe
        if (password_verify($password, $admin['password'])) {
            // Mot de passe correct, enregistrer l'ID de l'administrateur dans la session
            $_SESSION['admin_id'] = $admin['id'];

            // Rediriger vers la page d'accueil de l'administrateur
            header('Location: index.php');
            exit;
        }
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);

    // Afficher un message d'erreur si les informations de connexion sont incorrectes
    $erreur_message = "Email ou mot de passe incorrect.";
}
?>






<body>
    
    <div class="form-screen  " >
        <img src="../assets/images/logo.png" width="100px" >
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white">Connexion administrateur </div>
            <div class="card-body">
            <?php if (isset($erreur_message)) { ?>
        <p><?php echo $erreur_message; ?></p>
    <?php } ?>
                <form action="#!">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Souviens de moi</label>
                        </div>
                    </div>
                    <div class="account-dialog-actions">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.b/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/easion.js"></script>
</body>ootstrapcdn.com/bootstrap/4.3.1

</html>