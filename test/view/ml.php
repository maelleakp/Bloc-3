<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Mentions Légales</title>
  </head>
  <body>
  <header>
        <!-- <figure id="imgLogo">
            <img src="../img/Pab.png" alt="none" id="img2">
        </figure> -->
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


    <div class="mlText">
      <h3 id="titresML">MENTIONS LÉGALES</h3>
      <p>
      Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour
      la confiance en l'économie numérique, il est précisé aux utilisateurs du
      site Supporters Solidaires l'identité des différents intervenants dans le
      cadre de sa réalisation et de son suivi.
    </p>

    <h3 id="titresML">Edition du site</h3>

    <p>
      Le présent site, accessible à l’URL www.supporterssolidaires.fr (le « Site
      »), est édité par : Maëlle Akpweh, résidant 7 Rue de Labrede 33800
      Bordeaux, de nationalité Française (France), né(e) le 23/12/1997,
    </p>

    <h3 id="titresML">Hébergement</h3>
    <p>
      Le Site est hébergé par la société OVH SAS, situé 2 rue Kellermann - BP
      80157 - 59053 Roubaix Cedex 1, (contact téléphonique ou email : 1007).
    </p>
    <h3 id="titresML">Directeur de publication</h3>

    <p>Le Directeur de la publication du Site est Maëlle Akpweh.</p>
    <h3 id="titresML">Nous contacter</h3>
    <p>
      Par téléphone : +33630664047 Par email : akpweh.maelle@hotmail.fr Par
      courrier : 7 Rue de Labrede 33800 Bordeaux
    </p>
    <h3 id="titresML"> Données personnelles</h3>
    <p>
      Le traitement de vos données à caractère personnel est régi par notre
      Charte du respect de la vie privée, disponible depuis la section "  <a href="https://www.paysdelaloire.fr/sites/default/files/2019-10/charte_politique_de_confidentialite.pdf" target="blank"> Charte
      de Protection des Données Personnelles</a>", conformément au Règlement Général
      sur la Protection des Données 2016/679 du 27 avril 2016 («RGPD»).
    </p>
    </div>
    <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>
    <script src="../js/cookies.js"></script>
  </body>
</html>
