<?php
include('../src/connexion.php');


session_start();

if (isset($_POST['connect'])) {
    if (!empty($_POST['username']) && !empty($_POST['mdp'])) {
        $userPseudo = htmlspecialchars($_POST['pseudo']);
        $userPassword = htmlspecialchars($_POST['mdp']);

        $sqlUser = $pdo->prepare("SELECT * FROM inscription WHERE nameAccount = ? AND `password` = ?");
        $sqlUser->execute([$userPseudo, $mdp]);

        if ($sqlUser->rowCount() > 0) {

            $_SESSION['username'] = $userPseudo;
            $_SESSION['mdp'] = $userPassword;
            $_SESSION['id'] = $sqlUser->fetch()['id'];

            header('Location: http://localhost:90/Mini-chat/front/index.php');
        } else {
            echo "Votre mot de passe ou votre pseudo est incorrect...";
        }
    } else {
        echo "Veuillez remplir tous les champs...";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Connexion</title>
    <link rel="stylesheet" href="../front/style.css">
</head>

<body>

    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Connexion à votre compte</span>
        </div>
    </nav>

    <form method="POST" action="" class="form">
        <label class="form-label">Pseudo : </label>
        <input type="text" class="form-control" name="username" autocomplete="off">
        <br>
        <label class="form-label">Mot de passe :</label>
        <input type="password" class="form-control" name="mdp" autocomplete="off">
        <br>
        <button type="submit" name="envoi" class="d-flex btn btn-primary">Se connecter</button>
    </form>
</body>

</html>