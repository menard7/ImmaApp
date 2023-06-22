<body>
<?php include("base.php") ?>
<?php require_once('navbar.php') ?>

  <div class="text-center p-2">
    <h4><b>Demande de document : immatriculation de moto</b></h4>
  </div>
    <div class="row">
        <div class="col-1 "></div>
        <div class="col-lg-10 pl-4 mb-4">
            <div class="container">
                <h3>Formulaire de demande</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group"><br>
                      <label for="nom">Nom :</label>
                      <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="prenom">Prénom :</label>
                      <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="date_naissance">Date de naissance :</label>
                      <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="lieu_naissance">Lieu de naissance :</label>
                      <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" placeholder="Lieu de naissance" required>
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
                      <input type="text" class="form-control" id="ville" name="ville" placeholder="Votre ville" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="fonction">Fonction :</label>
                      <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Votre fonction" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="telephone">Numéro de téléphone :</label>
                      <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Numéro de téléphone" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="email">Adresse email :</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email" required>
                    </div>
                    <div class="form-group"><br>
                      <label for="marque">Marque de moto :</label>
                      <input type="text" class="form-control" id="marque" name="marque" placeholder="Marque de moto" required>
                    </div>
                  </div>
                </div><br>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="modele">Modèle de moto :</label>
                      <input type="text" class="form-control" id="modele" name="modele" placeholder="Modèle de moto"required>
                    </div><br>
                    <div class="form-group">
                      <label for="numero_chasi">Numéro de chasie :</label>
                      <input type="text" class="form-control" id="numero_chasie" name="numero_chasie" placeholder="Numéro de chasie" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="numero_moteur">Numéro de moteur :</label>
                      <input type="text" class="form-control" id="numero_moteur" name="numero_moteur" placeholder="Numéro de moteur" required>
                    </div><br>
                    <div class="form-group">
                      <label for="couleur">Couleur de moto :</label>
                      <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Couleur de moto" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="adresse">Adresse :</label>
                  <textarea class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" required></textarea>
                </div><br>
                <div class="form-group">
                  <label for="piece">Pièces à fournir:</label>
                  <input type="file" class="form-control" name="piece" id>
                </div><br>
                  
                <a type="submit" class="btn btn-secondary w-25 text-uppercase" href="index.php" style="float: left;">Précédent </a>
                <a type="submit" class="btn btn-secondary w-25 text-uppercase" href="#!"style="float: right;">Suivant </a>
              </div>
              

        </div>
        </form>

  </div>
