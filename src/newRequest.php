<?php
include('connexion.php');

$ipAdress = $_SERVER['REMOTE_ADDR'];
setlocale(LC_TIME, 'fr_FR.utf8');
$date = strftime("%A %d %B %r");


if (!empty($_POST['pseudo']) && !empty($_POST['message'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $message = nl2br(htmlspecialchars($_POST['message']));
    $sqlPseudo = "INSERT IGNORE INTO Utilisateur (id, pseudo) VALUES (NULL, '$pseudo')";
    $sqlMessage = "INSERT INTO `Message` (id, contenu, date, adresseIP, userName) VALUES (NULL, '$message', '$date', '$ipAdress', '$pseudo')";

    $pdo->exec($sqlPseudo);
    $pdo->exec($sqlMessage);
    header('Location: http://localhost:90/Mini-chat/front/index.php');
}
