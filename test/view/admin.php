<?php
// Se connecter à la BDD
$dbh = new PDO('mysql:host=localhost:8889;dbname=bloc3', 'root', 'root');

// Récupérer l'id et le nom de chaque équipe crée par l'utilisateur
$query = $dbh->query("SELECT * FROM Equipe");
$test = $query->fetchAll(PDO::FETCH_CLASS);

// Récupérer l'id et le nom des rôles des joueurs
$role = $dbh->query("SELECT * FROM Role ");
$test2 = $role->fetchAll(PDO::FETCH_CLASS);

// Requêtes SQL pour l'ajout des matchs
if (isset($_POST['submit'])){
    if (!empty($_POST['equipe1']) && !empty($_POST['equipe2']) && !empty($_POST['date']) && !empty($_POST['heure'])){
        if ($_POST['equipe1'] != $_POST['equipe2']){
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $equipe1 = $_POST['equipe1'];
            $equipe2 = $_POST['equipe2'];

            // Insérer la date et l'heure du match
            $sql = "INSERT INTO Rencontre(DATE_M, HEURE_M) VALUES ('$date', '$heure')";
            $dbh->query($sql);

            // Récupérer l'id du match crée
            $sql1 = "SELECT ID_M FROM Rencontre WHERE Rencontre.DATE_M = '$date' AND Rencontre.HEURE_M = '$heure'";
            $match = $dbh->prepare($sql1);
            $match->execute();
            $match2 = $match->fetchAll(PDO::FETCH_CLASS);
            $idMatch = $match2['0']->ID_M;

            
            // Insérer l'id des deux équipes dans la table 'dispute'
            // echo $equipe1 . ' et ' . $equipe2 . ' jouent le match n°' .$idMatch;
            $sql2 = "INSERT INTO dispute(ID_E, ID_M_RENCONTRE) VALUES ('$equipe1', '$idMatch')";
            $dbh->query($sql2);
            $sql3 = "INSERT INTO dispute(ID_E, ID_M_RENCONTRE) VALUES ('$equipe2', '$idMatch')";
            $dbh->query($sql3);
        }
    }
}

// Requêtes SQL pour l'ajout des joueurs
if (isset($_POST['valider'])){
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['equipe']) && !empty($_POST['poste'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $idEquipe = $_POST['equipe'];
        $idRole = $_POST['poste'];
        $sql = "INSERT INTO Joueur(NOM_J, PRENOM_J, ID_R, ID_E) VALUES ('$nom', '$prenom', '$idEquipe', '$idRole')";
        $dbh->query($sql);
    }
}
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
            <h1>Supporters Solidaires</h1>
            
            <nav>
                <div class="icons">
                    <i class="fa-solid fa-burger"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <ul>
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="jeu.php">Jeu concours</a></li>
                    <li><a href="elections.php">Élections</a></li>
                    <li><a href="identification.php">S'identifier</a></li>
                </ul>
            </nav>
        </header>

        <section>
            <form action="../Controller/equipe.php" method="POST">
                <label for="equipe">Ajouter une équipe</label>
                <input type="text" name="equipes" placeholder="Écrire le nom de l'équipe">
                <input type="submit" name="submit" value="Valider">
            </form>
            
            <form action="admin.php" method="POST">
                <label for="match">Ajouter un match</label>
                <select id="equipe1" name="equipe1" placeholder="Équipe 1">
                <?php foreach ($test as $donnees): ?>
                    <option value="<?= $donnees->ID_E?>"><?php echo $donnees->NOM_E ?></option>
                <?php endforeach; ?>
                </select>
                <select id="equipe2" name="equipe2" placeholder="Équipe 2">
                <?php foreach ($test as $donnees): ?>
                    <option value="<?= $donnees->ID_E?>"><?php echo $donnees->NOM_E ?></option>
                <?php endforeach; ?>
                </select>
                <input type="date" name="date">
                <input type="time" name="heure">
                <input type="submit" name="submit" value="Valider">
            </form>

            <form action="admin.php" method="POST">
                <label for="joueurs">Ajouter les joueurs</label>
                <select id="equipe" name="equipe" placeholder="Équipe">
                <?php foreach ($test as $donnees): ?>
                    <option value="<?= $donnees->ID_E?>"><?php echo $donnees->NOM_E ?>
                <?php  endforeach; ?>
                </select>
                <select id="poste" name="poste" placeholder="Poste">
                <?php foreach ($test2 as $donnee): ?>
                    <option value="<?= $donnee->ID_R?>"><?php echo $donnee->NOM_R ?>
                <?php  endforeach; ?>
                </select>
                <input type="text" name="nom" placeholder="Écrire le nom du joueur">
                <input type="text" name="prenom" placeholder="Écrire le prénom du joueur">
                <input type="submit" name="valider" value="Valider">
            </form>

            <div>
                <a href="./listeEquipes.php">Liste des équipes</a>
                <a href="./listeJoueurs.php">Liste des joueurs</a>
                <a href="./listeParticipants.php">Liste des participants</a>
            </div>

        </section>
        
        <footer>
            <p>2022 &copy; Supporters Solidaires - Tous Droits Réservés - <a href="mailto:t.akpweh@gmail.com" target="_self">Nous contacter</a></p>
        </footer>
        <script src="../js/burger.js"></script>
    </body>
</html>