<?php
include('../src/connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Inscription</title>
    <link rel="stylesheet" href="/Mini-chat/front/style.css">
</head>

<header>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Inscription</span>
        </div>
    </nav>
</header>

<body class="formulaire">
    <form action="" method="POST" class="border border-black form">
        <div class="mb-2 p-5 mt-2">
            <label for="userInputName" class="form-label" name="nom1">Pseudo : </label>
            <input type="" name="user" class="form-control" id="userName" aria-describedby="nameHelp" autocomplete="off">

        </div>

        <div class="mb-2 ms-5 pe-5">
            <label for="userInputFirstName" class="form-label" name="prenom1">Mot de passe : </label>
            <input type="" name="password" class="form-control" id="userFirstName" aria-describedby="firstnameHelp" autocomplete="off">

        </div>

        <button type="submit" name="envoi" class="d-flex btn btn-dark ms-5 mb-2 mt-4">S'inscrire</button>
    </form>


    <?php

    try {
        if (isset($_POST['envoi'])) {
            if (!empty($_POST['user']) && !empty($_POST['password'])) {
                $userAccount = htmlspecialchars($_POST['user']);
                $password = htmlspecialchars($_POST['password']);


                $sqlAccount = "INSERT INTO `inscription` (`id`, `nameAccount`, `password`) VALUES (NULL, '$userAccount', '$password')";

                $pdo->exec($sqlAccount);
                header('Location: http://localhost:90/Mini-chat/front/index.php');
            } else {
                echo "Inscription invalide...";
            }
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>

</body>

</html>