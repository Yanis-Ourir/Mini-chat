<?php

include('connexion.php');


$sqlMessage = "SELECT * FROM `Message`";
$messageList = $pdo->prepare($sqlMessage);
$messageList->execute();
$messages = $messageList->fetchAll();

foreach ($messages as $message) {

?>
    <div class="newMessage">
        <p class="ms-5 mt-5">
            <?= $message['userName'] ?> :
        </p>

        <div class="d-flex align-items-center">

            <div class="p-3 ms-5 mb-3 bg-info bg-opacity-10 border border-info border rounded" style="width: fit-content">
                <?= $message['contenu'] ?>
            </div>

            <p class="fst-italic fw-lighter ms-3">
                <?= $message['date'] ?>
            </p>
        </div>

    </div>

<?php
}
?>