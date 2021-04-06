<?php
    include('connexion.php'); ?>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $adress = $_POST['adress'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $password = $_POST['password'];

        $registerClients = "insert into clients(name, lastname, adress, email, tel, password)
            values(:name, :lastname, :adress, :email, :tel, :password)";
        $requete = $conn->prepare($registerClients);
        $requete->bindParam(':name', $name);
        $requete->bindParam(':lastname', $lastname);
        $requete->bindParam(':adress', $adress);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':tel', $tel);
        $requete->bindParam(':password', $password);

        $requete->execute();
        header("Location:register.php");
    }else{
        echo("Kindiii eee!");
    }
?>