<?php 

// Page inscription : On controle si toutes les données entrées sont au bon format
if (isset($_POST["submit"])){
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["password"]) && !empty($_POST["password2"])){
        $nom = valid_donnees($_POST["nom"]);
        $prenom = valid_donnees($_POST["prenom"]);
        $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $password2 = password_hash($_POST["password2"], PASSWORD_DEFAULT);
        
        // connexion à la BDD 

        $dbh = new PDO('mysql:host=localhost;dbname=bloc3', 'root', '');
       
        
   
               
// savoir si le mail est déjà utilisé

        $sql = "SELECT MAIL_U FROM User WHERE User.MAIL_U = '$mail'";
        $prepare = $dbh->prepare($sql);
        $prepare->execute();
        $valeur = $prepare->fetchAll(PDO::FETCH_CLASS);
        var_dump ($valeur);
        $idV = $valeur['0']->MAIL_U;
        
// Si nouveau mail alors enregistrer toutes les données dans la table user de la BDD
        if ($idV == NULL) {
            $sql = "INSERT INTO User(NOM_U, PRENOM_U, MAIL_U, MDP_U) VALUES ('$nom','$prenom','$mail','$password')";
            $dbh->query($sql); 

            // Récupérer l'id_u
            $recup = "SELECT ID_U FROM User WHERE User.NOM_U = '$nom'";
            $prepare = $dbh->prepare($recup);
            $prepare->execute();
            $valeur = $prepare->fetchAll(PDO::FETCH_CLASS);
            $idU = $valeur['0']->ID_U;
            

            // Insérer dans la table possède l'id_u et l'id_r qui vaut '1' 
            $sql2 = "INSERT INTO possede(ID_U, ID_R) VALUES ('$idU', '1')";
            $dbh->query($sql2);

            // require "../view/concours.php";
            header('Location: ../view/home.php');

        }
        else {
            //require "../view/identification.php";
            header('Location: ../view/inscription.php');

            echo "Mail déjà utilisé";
        }
    }

}

// Controler la connexion de l'utilisateur

if (isset($_POST["submit2"])){
    if (!empty($_POST["mail"]) && !empty($_POST["password"])){
        $mail = filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL);
        $password = valid_donnees($_POST["password"]);
        

        $dbh = new PDO('mysql:host=localhost;dbname=bloc3', 'root', '');

        $sql = "SELECT MAIL_U, MDP_U FROM User WHERE User.MAIL_U = '$mail'";
        $prepare = $dbh->prepare($sql);
        $prepare->execute();
        $valeur = $prepare->fetchAll(PDO::FETCH_CLASS);
        $verifMail = $valeur['0']->MAIL_U;
        $verifPassword = $valeur['0']->MDP_U;

        // Si le mail entré correspond a un mail de la BDD : autoriser l'accès

        if ($verifMail == $mail && password_verify($password, $verifPassword)){
            session_start();
            $_SESSION['mail'] = $mail;
            
            

            //require "../view/home.php";
            header('Location: ../view/home.php');

        }
        else {
            //require "../view/identification.php";
            header('Location: ../view/login.php');

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