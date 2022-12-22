<?php
session_start();
$dbh = new PDO('mysql:host=localhost;dbname=bloc3', 'root', '');

$sql = "SELECT * FROM Joueur";
$prepare = $dbh->prepare($sql);
$prepare->execute();
$listeJ = $prepare->fetchAll(PDO::FETCH_CLASS);


if (isset($_POST['effacer'])){
    foreach ($_POST['effacer'] as $key => $value){
        $idJ = "{$key}";
        $sql = "DELETE FROM Joueur WHERE Joueur.ID_J = '$idJ'";
        $dbh->query($sql);
        header('Location: ../view/listeJoueurs.php');
    }

}

if (isset($_POST['modifier'])){
    foreach ($_POST['modifier'] as $key => $value){
        $idJ = "{$key}";
        $_SESSION['idJo'] = $idJ;
        header('Location: ../view/modifierJ.php');
    }
}


if (isset($_POST['valider'])){
    if (!empty($_POST['nom']) && !empty($_POST['prenom'])){
        $idJ = $_SESSION['idJo'];
        $nouveauNom =htmlspecialchars($_POST['nom']);
        $nouveauPrenom =htmlspecialchars($_POST['prenom']);
        $sql = "UPDATE Joueur SET Joueur.NOM_J = '$nouveauNom', Joueur.PRENOM_J = '$nouveauPrenom' WHERE Joueur.ID_J = '$idJ'";
        $dbh->query($sql);
        header('Location: ../view/listeJoueurs.php');
    }
    else {
        echo "Veuillez entrer un nom et un prénom ";
    }
}
?>