<?php

require_once 'includes/pdo.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "INSERT INTO user (nom, prenom, email, pass) VALUES (:nom, :prenom, :email, :pass)";

    $query = $db->prepare($sql);

    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('prenom', $_POST["prenom"]);
    $query->bindValue('email', $_POST["email"]);
    $query->bindValue('pass', password_hash($_POST["pass"], PASSWORD_BCRYPT));

    if (!$query->execute()) {
        dump($db->errorInfo());
        die('Veuillez contacter machin avec le code erreur 315647861');
    }
}

