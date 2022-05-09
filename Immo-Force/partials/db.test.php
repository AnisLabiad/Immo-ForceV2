<?php

$dbh = new PDO('mysql:host=localhost;dbname=immo', "root","");

$req  = $dbh->prepare("SELECT * FROM logement");
$req->execute();
$homes = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();

?>

<?php
//var_dump($homes);
?>