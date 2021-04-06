
<?php
try{
    $conn=new PDO("mysql:host=localhost;dbname=ecommerce","root","");
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>