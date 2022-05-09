<?php require_once "./partials/header.php"?>

<link rel="stylesheet" href="./assets/style.css">

<?php

//--------------------------------------------  READ -------------------------------------------------


$bdd = new PDO('mysql:host=localhost;dbname=immo', "root", ""); 
// connexion à la BDD
$req  = $bdd->prepare("SELECT * FROM logement "); // la requete 
$req->execute(); // envoi et execution en BDD 
$homes = $req->fetchAll(PDO::FETCH_ASSOC); 
$req->closeCursor(); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main class="container">

<h1 class="p-4 my-5 bg-dark text-danger text-center">Aperçu des logements</h1>


        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Ville</th>
                    <th scope="col">CP</th>
                    <th scope="col">Surface</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($homes as $home) : ?>
                    <tr class="table">
                        <td> <?= $home['id_logement'] ?></td>
                        <td> <?= $home['adresse'] ?></td>
                        <td> <?= $home['ville'] ?></td>
                        <td> <?= $home['cp'] ?></td>
                        <td> <?= $home['surface'] ?>m² </td>
                        <td> <?= $home['prix'] ?> $</td>
                        <td><img src="<?= $home['photo'] ?>" alt=""></td>
                        <td> <?= $home['type'] ?></td>
                        <td> <?= $home['description'] ?></td>
                        <td>
                        <form action="delete.php" method="post" 
                            onSubmit="return confirm('Êtes-vous certain ?')">
                            <input hidden type="text" name="homeID" value="<?= $home['id_logement'] ?>">
                        <button class="btn" type="submit">X</button>
                        </form>
                        </td>
                        <td>
                        <form action="edit.php" method="post">
                            <input hidden type="text" name="homeID" value="<?= $home['id_logement'] ?>">
                        <button class="btn" type="submit">Edit</button>
                        </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

</body>
</html>

<?php require_once "./partials/footer.php"
?>