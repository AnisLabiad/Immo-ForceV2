<link rel="stylesheet" href="./assets/style.css">

<?php

var_dump($_POST);

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
$req = "INSERT INTO `logement` (`titre`, `adresse`, `ville`, `cp`, `surface`, `prix`, `photo`, `type`, `description`) VALUES
                    
                    (:titre, 
                    :adresse,
                    :ville,
                    :cp,
                    :surface,
                    :prix,
                    :photo,
                    :type,
                    :description) ";
$stmt = $bdd->prepare($req);
$stmt->bindValue(":titre",$titre, PDO::PARAM_STR);
$stmt->bindValue(":adresse",$adresse, PDO::PARAM_STR);
$stmt->bindValue(":ville",$ville, PDO::PARAM_STR);
$stmt->bindValue(":cp",$cp, PDO::PARAM_INT);
$stmt->bindValue(":surface",$surface, PDO::PARAM_INT);
$stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
$stmt->bindValue(":photo",$photo, PDO::PARAM_STR);
$stmt->bindValue(":type",$type, PDO::PARAM_STR);
$stmt->bindValue(":description",$description, PDO::PARAM_STR);

$result = $stmt->execute(); // return true si good donc si 
$stmt->closeCursor();       // donc SI good redirect avec header
var_dump($stmt = $bdd->prepare($req));
// ah comme ça ! évidemment !
if ($result) {
    header("Location: apercu.php");
}