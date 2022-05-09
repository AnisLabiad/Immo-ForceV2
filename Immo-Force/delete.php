<?php

// var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
if (!empty($_POST['homeID'])) {

    $IDhome = $_POST['homeID']; // vérifier type
    // avoir la bdd ($bdd) forcement... require...
    $req = "DELETE FROM logement WHERE id_logement= :id";
    $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
    $stmt->bindValue(":id", $IDhome, PDO::PARAM_INT);
    $result = $stmt->execute(); // si good redirection !
    $stmt->closeCursor();
    
    
    if ($result) {
        header("Location: apercu.php");
    }
}