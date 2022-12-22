<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="UTF-8">
        <title>Supporters Solidaires</title>
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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


        <section id="sectionVote">

            <h1>Pour voter</h1>
            <h2>Se <a href="#" onClick="window.open('login.php', '', 'width=550em,height=450em,top=100,left=100')">connecter</a> ou <a href="#" onClick="window.open('inscription.php', '', 'width=550em,height=450em,top=100,left=100')">s'inscrire</a></h2>

        </section>
        
        <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>
        <script src="../js/burger.js"></script>
        <script src="../js/cookies.js"></script>
    </body>
</html>
