<?php
include('connexion.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Projet Mini-chat</title>
    <link rel="stylesheet" href="/Mini-chat/front/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <?php
        include('./src/header.php');
        ?>

    </header>

    <section id="messages">

        <?php
        include('./src/liste-messages.php');
        ?>
    </section>


    <footer class="">

        <form action="" method="POST" class="d-flex fixed-bottom mt-5 align-items-center justify-content-center">

            <div class="mb-2 p-5 mt-2">
                <label for="userInputName" class="form-label" name="nom1">Pseudo : </label>
                <input type="" name="pseudo" class="form-control" id="userName" aria-describedby="nameHelp">

            </div>

            <div class="mb-2 ms-5 pe-5">
                <label for="userInputFirstName" class="form-label" name="prenom1">Message : </label>
                <input type="" name="message" class="form-control" id="userFirstName" aria-describedby="firstnameHelp">

            </div>


            <button type="submit" name="submit" class="btn btn-dark ms-5 mb-2 mt-4">Envoyer</button>


        </form>

    </footer>

    <!--On récupère le pseudo et le message de l'utilisateur-->

    <?php
    include('./src/newRequest.php');
    ?>
    <script>
        setInterval('load_messages()', 100)

        function load_messages() {
            $('#messages').load('./src/liste-messages.php');
        }
    </script>
    <!--Link to JS files-->




</body>

</html>