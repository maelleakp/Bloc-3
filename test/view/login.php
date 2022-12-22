<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" media="screen" type="text/css" />
</head>

<body>
    <div id="containerLogin">
        <!-- zone de connexion  -->
        <form id="formLogin" action="../Controller/controller.php" method="POST">
            <h1>Connexion</h1>
            <div id="eMailLogin">
            <label><b>E-mail</b></label>
            <br>
            <input type="email" placeholder="Entrer l'adresse e-mail" id="mail2" name="mail" required>
            </div>
            <div id="pwLogin">
            <label for="mdp"><b>Mot de passe</b></label>
            <br>
            <input type="password" id="password3" placeholder="Entrer le mot de passe" name="password" required>
            </div>  
            <div id="submitLogin">
            <input type="submit" id='submit' name="submit2" value='Connexion'>
            </div>
            <?php
 if (isset($_GET['erreur'])) {
     $err = $_GET['erreur'];
     if ($err == 1 || $err == 2)
         echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
            <div id="mdpOublie">Mot de passe oublié ? Cliquez <a href="#">ici</a> ou <a
                    href="inscription.php">inscrivez-vous </a> </div>
    </div>

    </form>
    <script src="../js/script.js"></script>
    <script src="../js/cookies.js"></script>
</body>

</html>