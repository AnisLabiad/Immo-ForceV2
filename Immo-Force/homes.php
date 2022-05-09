
<?php require_once "partials/header.php" ?>
<?php require_once "./partials/db.test.php"?>

<div class="container">
   </div>

    <h2 class="my-5 text-center">Nos Habitations de luxe</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

    <?php 
foreach ($homes as $home) : ?>

<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($home["titre"]) ?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $home["photo"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $home["titre"] ?>">
        <hr>

        <p>Adresse:
        <span><?= ucwords($home["adresse"])?></span>
        </p>

        <p>Ville:
        <span><?= ucwords($home["ville"])?></span>
        </p>

        <p>Code Postal:
        <span><?= $home["cp"] ?></span>
        </p>

        <p>Surface:
        <span><?= $home["surface"] ?> m²</span>
        </p>
        
        <p>Prix:
        <span><?= $home["prix"] ?> $</span>
        </p>

        <p>Type:
        <span><?= ucwords($home["type"])?></span>
        </p>

       <p>Description :
        <?php if ($home["description"]) : ?>
        <span><?= $home["description"] ?></span>
        <?php else : ?>
        <span>NC</span>
        <?php endif; ?>
    </p>

    

    </div>
</div>
<hr>

<?php endforeach 
?>