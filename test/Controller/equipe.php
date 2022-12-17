<?php

$equipe = $_POST['equipes'];
try {
    $dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');
    $sql = "INSERT INTO Equipe(NOM_E) VALUES ('$equipe')";
    $dbh->query($sql);
    require '../view/admin.php';

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>