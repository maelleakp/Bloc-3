<html>
 <head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="containerInscription">
 <!-- zone d'inscription !-->
  <fieldset>
                <legend>INSCRIPTION</legend>
                    <form id=formInscription action="../Controller/controller.php" method="POST" id="myForm">
                        <p>
                            <label for="nom">Votre nom :</label>
                            <input type="text" id="nom" name="nom" size="30" required>
                            <span id="errorName"></span>
                        </p>
    
                        <p>
                            <label for="prenom">Votre prénom :</label>
                            <input type="text" id="prenom" name="prenom" size="30" required autofocus>
                            <span id="errorPrenom"></span>
                        </p>

                        <p>
                            <label for="email">Votre email :</label>
                            <input type="email" id="mail" name="mail" required>
                            <span id="errorMail"></span>
                        </p>
    
                        <p>
                            <label for="password">Votre mot de passe :</label>
                            <input type="password" id="password" name="password" size="30">
                            <span id="errorPassword"></span>
                        </p>

                        <p>
                            <label for="confmdp">Confirmation mot de passe :</label>
                            <input type="password" id="password2" name="password2" size="30" onkeyup="checkPass(); return false">
                            <span id="errorPassword2"></span>
                        </p>
                        <!-- <input type="hidden" name="role" value="3"> -->
                        <input id="submitInscription" type="submit" name="submit" value="S'inscrire">
                        <div id="dejaInscrit">Déjà inscrit ? Connectez-vous <a href="login.php"> ici</div>
                       
    
                    </form>
            </fieldset>

 
 
 

 </div>

 </form>
 <script src="../js/script.js"></script>
 <script src="../js/cookies.js"></script>
 <footer>
        <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com"
                target="_self">Nous contacter</a> - <a href="ml.php" target="blank"> 
            Mentions Légales</a>
                </p>
    </footer>
 </body>
</html>
