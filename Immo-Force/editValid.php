<?php
$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", "");
// encore cette bdd ici !
$titre = $_POST['titre']; 
$adresse = $_POST['adresse']; 
$ville = $_POST['ville']; 
$cp = $_POST['cp']; 
$surface = $_POST['surface']; 
$prix = $_POST['prix']; 
$photo = $_POST['photo']; 
$type = $_POST['type']; 
$description = $_POST['description'];  
// faire des vérifs avant !
$statement = $bdd->prepare("UPDATE immo SET `titre` =:titre, `adresse` =:adresse, `ville` =:ville, `cp` =:cp, `surface` =:surface, `prix` =:prix, `photo` =:photo, `type` =:type, `description` = :description
WHERE id = :homeID");
$statement->bindValue(":titre",$titre, PDO::PARAM_STR);
$statement->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$statement->bindValue(":ville",$ville, PDO::PARAM_STR);
$statement->bindValue(":cp",$cp, PDO::PARAM_INT);
$statement->bindValue(":surface",$surface, PDO::PARAM_INT);
$statement->bindValue(":prix",$prix, PDO::PARAM_INT);
$statement->bindValue(":photo",$photo, PDO::PARAM_STR);
$statement->bindValue(":type",$type, PDO::PARAM_STR);
$statement->bindValue(":description",$description, PDO::PARAM_STR);
$result = $statement->execute(); 
$statement->closeCursor();
// ah comme ça ! évidemment !
if ($result) {
    header("Location: apercu.php");
}