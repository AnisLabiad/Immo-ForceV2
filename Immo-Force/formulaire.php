<?php require_once "partials/header.php" ?>


<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Poster votre annonce</title>
    </head>

    <body>

        <main class="container">

            <h1 class="p-4 my-5 bg-dark text-danger text-center">Ajouter un logement</h1>


            <form class="bg-light shadow p-3 form-group col-6 m-auto border" action="createValid.php" method="post">
                <input type="text" class="form-control my-2" name="titre" placeholder="Titre" >
                <input type="text" class="form-control my-2" name="adresse" placeholder="Adresse" >
                <input type="text" class="form-control my-2" name="ville" placeholder="Ville" >
                <input type="text" class="form-control my-2" name="cp" placeholder="CP" >
                <input type="text" class="form-control my-2" name="surface" placeholder="Surface en m²" >
                <input type="number" class="form-control my-2" name="prix" placeholder="Prix" >
                <input type="file" accept="jpg," class="form-control my-2" name="photo" placeholder="Photo">
                <select name="type">
                <option value="">--Type d'acquésitition--</option>
                <option value="location">location</option>
                <option value="achat">achat</option>
                </select>
            <textarea type="text" class="form-control my-2" name="description" placeholder="Description du bien..."></textarea>
            <br>
            <button type="submit" class="m-auto my-2 d-block btn btn-success">Ajouter</button>
        </form>
    </main>



</body>
<?php require_once "partials/footer.php" ?>

</html>