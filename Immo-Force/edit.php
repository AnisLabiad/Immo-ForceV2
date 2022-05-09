

<?php

require_once "./partials/header.php";


//var_dump($_POST);

require_once "./partials/db.test.php";


//var_dump($homes);
//var_dump($homes[0]['id_logement']);

?>

<form action="editValid.php" method="post">
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
            <button type="submit" class="m-auto my-2 d-block btn btn-success">Editer</button>
</form>

<?php
require_once "./partials/footer.php";
?>

