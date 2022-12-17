<?php 


if (isset($_POST["submit"])){
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["password"]) && !empty($_POST["password2"])){
        $nom = valid_donnees($_POST["nom"]);
        $prenom = valid_donnees($_POST["prenom"]);
        $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $password2 = password_hash($_POST["password2"], PASSWORD_DEFAULT);
        var_dump($password);
        $dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');

        $sql = "SELECT MAIL_U FROM User WHERE User.MAIL_U = '$mail'";
        $prepare = $dbh->prepare($sql);
        $prepare->execute();
        $valeur = $prepare->fetchAll(PDO::FETCH_CLASS);
        $idV = $valeur['0']->MAIL_U;
        
        if ($idV == NULL) {
            $sql = "INSERT INTO User(NOM_U, PRENOM_U, MAIL_U, MDP_U) VALUES ('$nom','$prenom','$mail','$password')";
            $dbh->query($sql); 
            require "../view/concours.php";
        }
        else {
            require "../view/identification.php";
            echo "Mail déjà utilisé";
        }
    }

}

if (isset($_POST["submit2"])){
    if (!empty($_POST["mail"]) && !empty($_POST["password"])){
        $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
        $password = password($_POST["password"]);

        $dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');

        $sql = "SELECT MAIL_U, MDP_U FROM User WHERE User.MAIL_U = '$mail'";
        $prepare = $dbh->prepare($sql);
        $prepare->execute();
        $valeur = $prepare->fetchAll(PDO::FETCH_CLASS);
        //var_dump($valeur);
        $verifMail = $valeur['0']->MAIL_U;
        $verifPassword = $valeur['0']->MDP_U;
        $verifier = password_verify($verifPassword);
        var_dump($verifier);
        var_dump($password);

        if ($verifMail == $mail && $verifPassword == $password){
            require "../view/concours.php";
        }
        else {
            require "../view/identification.php";
            echo "Identifiant ou Mot de passe incorrects";
        }
    }
}

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

?>