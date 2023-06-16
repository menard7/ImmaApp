<!DOCTYPE html>
<html>
<head>
    
  <!--bootstrap4 library linked-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<?php
 //include('config/database.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	
	$query = "INSERT into `users` (username, email, password)
				VALUES ('$username', '$email','".hash('sha256', $password)."')";
	$res = mysqli_query($conn, $query);
   
   /* if($res){
        header("Location: index.php");
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='index.php'>connecter</a></p>
			 </div>";
    }*/
}else{
?>

<div class="container-fluid ">
 <div class="row justify content-center">
   <div class="col-md-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form ">
      <h4 class="text-center">S'inscrire</h4>
      <p class="text-success text-center"></p>

        <!--// username//-->
        <div class="form-group">
            <label>Nom de l'utilisateur:</label>
            <input type="text" class="form-control"  placeholder="Entrer un nom" name="nom" value="" required>
            <p class="err-msg">
            </p>
        </div>
          <!--// Email//-->
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control"  placeholder="Entrer email" name="email" value="">
            <p class="err-msg">
            
            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label>Mot de passe:</label>
            <input type="password" class="form-control"  placeholder="Enter mot de passe" name="password">
            <p class="err-msg">
          
            </p>
        </div>
        <a type="submit" class="btn btn-secondary" name="login" href="connexion.php" style="color:white">S'inscrire</a>

<?php } ?>
</body>
</html>
k