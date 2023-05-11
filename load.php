<?php

$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');

$getMessages = $bdd->query('SELECT * FROM messages');
while($message = $getMessages->fetch()){
    ?>
    <div class="message">
        <h1><?= $message['pseudo'] ?></h1>
        <h2><?= $message['message'] ?></h2>
    </div>
    <?php
}
?>
