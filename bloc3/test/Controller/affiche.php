<?php

$dbh = new PDO('mysql:host=localhost:8889;dbname=supporter', 'root', 'root');


// $sql = "SELECT * FROM Rencontre";
// $prepare = $dbh->prepare($sql);
// $prepare->execute();
// $affiche = $prepare->fetchAll(PDO::FETCH_CLASS);
//var_dump($affiche);

$sql = "SELECT DATE_M, HEURE_M, NOM_E FROM dispute INNER JOIN Equipe ON dispute.ID_E = Equipe.ID_E
INNER JOIN Rencontre ON Rencontre.ID_M = dispute.ID_M_Rencontre ORDER BY Rencontre.DATE_M DESC";
$prepare = $dbh->prepare($sql);
$prepare->execute();
$affiche = $prepare->fetchAll(PDO::FETCH_CLASS);
