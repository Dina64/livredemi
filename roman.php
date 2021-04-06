<?php include('connexion.php')?>

<?php include('header.php'); ?>

<?php
    $select = " SELECT produits.*,type.* FROM produits 
                INNER JOIN type ON produits.id_type = type.id 
                WHERE type.libelle='Roman'";
    
    $requete = $conn->query($select);

?>
<!-- Portfolio Gallery Grid -->
<div class="tz-gallery">
    <div class="container">
    <div class="row">
       <?php foreach($requete as $row){ ?>

        <div class="col-sm-3 col-12 mt-3">
            <div class="card" style="width: 27rem;">
                <img class="card-img-top" src="img/gallery/<?= $row['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $row['libelle']; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Add Card:RS <?= $row['prix']; ?></a>
                </div>
            </div>
        </div>
        <?php } ?>


    </div>

    </div>
</div>

<?php include('footer.php'); ?>