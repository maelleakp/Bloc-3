<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Profil</title>
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

    <div id="divProfil">

        <h1>Profil de 'USER'</h1>
        <div id="photoProfil">
            <img src="../img/Profiltest.jpg" alt="none">
            <input type="submit" id="photoProfilButton" value="Modifier ma photo de profil">
                </div>
        <div id="nomProfil">
            <label for="Nom">Nom</label>
            <input type="text" placeholder="Nouveau nom d'utilisateur">
            <input type="submit" value="Modifier">
        </div>
        <div id="prenomProfil">
            <label for="Prénom">Prénom</label>
            <input type="text" placeholder="Nouveau prénom d'utilisateur">
            <input type="submit" value="Modifier">
        </div>
        <div id="emailProfil">
            <label for="eMail">adresse E-mail</label>
            <input type="text" placeholder="Nouvelle adresse e-mail">
            <input type="submit" value="Modifier">
        </div>
        <div id="passwordProfil">
            <label for="password">Mot de passe</label>
            <input type="text" placeholder="Nouveau mot de pass">
            <input type="submit" value="Modifier">
        </div>
        <br>
        <div id="deleteButton">
            <input type="submit" value="Supprimer mon compte">
        </div>
        <br>


        <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>

        <script src="../js/script.js"></script>
        <script src="../js/burger.js"></script>
</body>

</html>