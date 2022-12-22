<?php
session_start();

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

    <section id="sectionArticleHome">
        <div id="articleHome">
            <h2>À propos de Supporters Solidaires</h2>
            <div id="containerMain">
                <article>
                    <p>
                        L’association Supporters Solidaires déploie, en France et dans le monde (Focus : Afrique) des
                        programmes bénéfiques aux personnes aveugles. Son but essentiel est de changer l’image
                        d’invalides,
                        d’incapables, d’inaptes que le grand-public porte sur ces acteurs et, de les inscrire
                        durablement
                        dans une posture de porteurs d’aptitudes, d’adaptitudes, de compétences.
                        <br />
                        <br />
                        Le football pour aveugles est notre locomotive.
                        <br />
                        <br />
                        Nous créons et développons des pôles de performances (pour des jeunes aveugles, pour des femmes
                        aveugles, pour des athlètes à forts potentiels), des centres techniques d’entraînement (pour des
                        collectifs nationaux), des séminaires de formation spécifiques des cadres (entraineurs,
                        arbitres,
                        guides), des évènementiels sportifs (compétitions continentales, mondiales), des projets-pilotes
                        d’autonomie (permettant à la personne aveugle de se mouvoir librement et sans assistance dans
                        nos
                        espaces-projets), des dispositifs itinérants de diagnostics et de prévention…
                        <br />
                        <br />
                        Dans le secteur du sport, elle est, en France, partenaire de la Fédération Française Handisport
                        (pour la gestion des équipes de France masculines et féminines); supporters Solidaires collabore
                        dans le monde avec la Fédération Internationale des Sports pour Aveugles (pour le développement
                        du
                        football pour aveugles, plus particulièrement en Afrique. Dans le cadre général de ses
                        programmes,
                        l’association collabore également avec l’Union Mondiale des Aveugles (particulièrement en
                        Afrique).
                        Dans le secteur de la recherche médicale, Supporters Solidaires s’associe à l’Institut de la
                        Vision
                        de Paris et dans d’autres thèmes (inclusion, accessibilité, formation, autonomie ou insertion),
                        notre organisation collabore avec d’autres partenaires ciblés, pour que les aveugles ne soient
                        plus
                        hors-jeu !
                    </p>
                </article>

                <div id="imgRight">
                </div>
            </div>

        </div>
<section id="imageTextDown">
    <div id="imgDown">
            <img src="../img/cecifootpetit1" alt="none">
            <img src="../img/cecifootpetit2" alt="none">
            <img src="../img/cecifootpetit3" alt="none">
    </div>

    <div id="TextDown">
        <h2>Les actions de la mi-temps</h2>
        <p>

            Présent aux matchs de Cécifoot en cours aux Jeux Paralympiques de Paris 2024, et si l’on vous donnait la
            possibilité de gagner un maillot de football d’une des STARS DU FOOTBALL évoluant dans de grands clubs
            prestigieux, DÉDICACÉ par ces joueurs eux-mêmes ! Sympa non ? <br /><br />
            En même temps, que diriez vous d’élire un meilleur joueur ainsi qu’un meilleur gardien de la compétition/de
            chaque match ?
            <br /><br />
            Cette page internet vous permet d’intéragir avec toutes ses propositions : Rendez-vous dans les onglets
            ‘Élections’ et ‘Jeu concours’ !</p>
            
            <div id="videoCecifoot">
            <p>
            Ci-dessous, un bandeau vidéo d'introduction au Cécifoot ! 
                        </p>
        </div>
        </div>
            
            
            
        </section>
                </section>
       

    
    



    <div id="bandeauVid">
        <video muted preload autoplay loop>
            <source src="../img/videocecifoot.mp4">
        </video>


    </div>
    

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