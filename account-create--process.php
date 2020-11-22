<?php

  $userNom = $_POST["user-nom"] ?? false;

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom :</li>
      <li>Adresse :</li>
      <li>Code postal :</li>
      <li>Ville :</li>
      <li>Pays :</li>
      <li>Téléphone :</li>
      <li>Adresse électronique :</li>
      <li>Mot de passe :</li>
    </ul>
  </main>
</body>
</html>