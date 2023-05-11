<?php

$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');

if(isset($_POST['valider'])){
    if (!empty($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insertMessage = $bdd->prepare('INSERT INTO messages(pseudo, message) VALUES (?, ?)');
        $insertMessage->execute(array($pseudo, $message));
    }else{
        echo "erreur";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mini Chat</title>
</head>
<body>
<form action="" method="post" id="form">
    <h1>Entrez votre nom d'utilisateur</h1>
    <input type="text" name="pseudo" id="username">
    <h2>Saisissez votre message</h2>
    <textarea name="message" id="message"></textarea>
    <input type="submit" name="valider" id="submitBtn">
    <div id="messages"></div>
</form>

    <script src="jquery/app.js"></script>
    <script src="jquery/jquery-3.6.2.min.js"></script>
</body>
</html>