<?php
include('connexion.php');

$sqlUsers = "SELECT * FROM Utilisateur";
$usersList = $pdo->prepare($sqlUsers);
$usersList->execute();
$users = $usersList->fetchAll();

foreach ($users as $user) {
    echo "<p>" . $user['pseudo'] . "</p><br>";
}
