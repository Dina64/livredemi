<?php include('connexion.php')?>

<?php include('header.php'); ?>

<?php
$select = " SELECT * FROM produits";

$requete = $conn->query($select);

?>
<table style="width:100%">
    <thead align="left" style="display: table-header-group">
    <tr>
        <th>ID</th>
        <th>IMAGE</th>
        <th>PRIX</th>
    </tr>
    </thead>
    <?php foreach($requete as $row) { ?>
    <tbody>
    <tr>

        <td><?= $row['id']; ?></td>
        <td><?= $row['image']; ?></td>
        <td><?= $row['prix']; ?></td>

    </tr>
    </tbody>
    <?php } ?>
</table>

