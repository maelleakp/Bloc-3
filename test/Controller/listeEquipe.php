<?php
session_start();
$dbh = new PDO('mysql:host=localhost;dbname=bloc3', 'root', '');

$sql = "SELECT * FROM Equipe";
$prepare = $dbh->prepare($sql);
$prepare->execute();
$listeE = $prepare->fetchAll(PDO::FETCH_CLASS);



if (isset($_POST['effacer'])){
    foreach ($_POST['effacer'] as $key => $value){
        $idE = "{$key}";
        $sql = "DELETE FROM Equipe WHERE Equipe.ID_E = '$idE'";
        $dbh->query($sql);
        header('Location: ../view/listeEquipes.php');
    }

}

if (isset($_POST['modifier'])){
    foreach ($_POST['modifier'] as $key => $value){
        $idE = "{$key}";
        $_SESSION['idE'] = $idE;
        header('Location: ../view/modifierE.php');
    }
}


if (isset($_POST['valider'])){
    if (!empty($_POST['nom'])){
        $idE = $_SESSION['idE'];
        $nouveauNom =htmlspecialchars($_POST['nom']);
        $sql = "UPDATE Equipe SET Equipe.NOM_E = '$nouveauNom' WHERE Equipe.ID_E = '$idE'";
        $dbh->query($sql);
        header('Location: ../view/listeEquipes.php');
    }
    else {
        echo "Veuillez entrer un nom ";
    }
}
?>