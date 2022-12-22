<?php
// session_start();
include_once ('../Controller/affiche.php');

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <title>Supporters Solidaires</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    

</head>

<body>
    <header>
        <figure id="imgLogo">
            <img src="../img/Pab.png" alt="none" id="img2">
        </figure>
        <h1>Supporters Solidaires</h1>

        <nav>
            <div class="icons">
                <i class="fa-solid fa-burger"></i>
                <i class="fa-solid fa-xmark"></i>
            </div>

            <ul>
                    <li><a href="home.php">Accueil</a></li>
                    <?php if (isset($_SESSION['mail']) && $_SESSION['mail']=='pabx@mail.fr'){?>
                    <li><a href="participe.php">Liste des participants</a></li>
                    <li><a href="resultatVote.php">Résultats des votes</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php } elseif (isset($_SESSION['mail'])){?>
                    <li><a href="concours.php">Concours</a></li>
                    <li><a href="elections.php">Élections</a></li>
                    <li><a href="monCompte.php">Mon compte</a></li>
                    <li><a href="../Controller/deconnexion.php">Deconnexion</a></li>

                    <?php }else {?>
                    <li><a href="jeu.php">Jeu</a></li>
                    <li><a href="vote.php">Vote</a></li>
                    <li><a href="#" onClick="window.open('login.php', '', 'width=550em,height=450em,top=100,left=100')">S'identifier</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <section>
            <h2> Résultat du meilleur joueur et du meilleur gardien pour le match
            <?php $idM = $_SESSION['idM'];

            for($i=0; $i<count($affiche); $i++) {
                if ($affiche[$i]->ID_M == $idM){
                    echo $affiche[$i]->NOM_E . "  ";
                }
            }
            ?>
            <input type="button" value="Retour" onclick="history.go(-1)"/>
            </h2>

            <div class="global">
                <div class="groupe">
                    <h2>Meilleur joueur</h2>
                    <?php
                        $nbVJ = $_SESSION['idnbVJ']; 
                        for ($i = 0; $i<count($nbVJ);$i++){
                            $nomMJ = $nbVJ[$i]->NOM_J;
                            $prenomMJ = $nbVJ[$i]->PRENOM_J;
                            echo $nomMJ . " " . $prenomMJ;
                        }
                    ?>
                </div>

                <div class="groupe">
                    <h2>Meilleur gardien</h2>
                    <?php
                        $nbVG = $_SESSION['idnbVG']; 
                        for ($i = 0; $i<count($nbVG);$i++){
                            $nomMG = $nbVG[$i]->NOM_J;
                            $prenomMG = $nbVG[$i]->PRENOM_J;
                            echo $nomMG . " " . $prenomMG;
                        }
                    ?>
                </div>
            </div>

        </section>
   
       

    
    



    

  
    

    <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>
    <div id="cookiePopup" class="hide">
        <!-- <img src="cookies.jpg"/> -->
        <h2>Supporters Solidaires respecte votre vie privée</h2>
        <p>
            Nous utilisons des cookies ou technologie différentes pour stocker et accéder à des données personnelles
            vous concernant comme celle liées à votre visite sur ce site. Vous pouvez retirer votre consentement ou vous
            opposer aux traitements basés sur l'intérêt légitime à tout moment en cliquant sur "Paramétrer" ou dans
            notre page "Données personnelles"
        </p>
        <br>
        <a href="ml.php" target="blank">Mentions légales</a>

        <br>

        <p>
            Nous traitons les données suivantes : <br> Données de géolocalisation précises et identification par analyse
            du terminal, publicités et contenu personnalisés.

        </p>
        <div id="buttons">
            <button id="acceptCookie">Accepter & fermer</button>
            <button id="paramCookie">Paramétrer les cookies</button>
        </div>
    </div>
    <script src="../js/burger.js"></script>
    <script src="../js/cookies.js"></script>
</body>

</html>