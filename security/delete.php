<?php

require_once "includes/pdo.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: ' . $_SERVER["HTTP_REFERER"]);
    exit();
}

$sql = "UPDATE user SET nom = :nom, prenom = :prenom, email = :email, pass = :pass WHERE id = :id";

$query = $db->prepare($sql);

$query->bindValue('nom', "a");
$query->bindValue('prenom', "a");
$query->bindValue('email', $_SESSION["security"]["id"] . "@rgpd");
$query->bindValue('pass', "a");

$query->bindValue('id', $_SESSION["security"]["id"]);

if (!$query->execute()) {
    dump($db->errorInfo());
    die('Veuillez contacter machin avec le code erreur 315647861');
}

unset($_SESSION["security"]);
