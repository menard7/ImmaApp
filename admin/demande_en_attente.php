<?php

// Liste des demandes en attente (ex. données fictives)
$demandes = array(
    array("id" => 1, "nom" => "Doe", "prenom" => "John", "age" => 30),
    array("id" => 2, "nom" => "Smith", "prenom" => "Jane", "age" => 25),
    array("id" => 3, "nom" => "Johnson", "prenom" => "Robert", "age" => 35),
);

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
