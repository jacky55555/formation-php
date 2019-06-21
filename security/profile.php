<?php

require_once 'includes/pdo.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $pass = $_POST["pass"] === "" ? "" : ", pass = :pass";

    $sql = "UPDATE user SET nom = :nom, prenom = :prenom, email = :email" . $pass . " WHERE id = :id";

    $query = $db->prepare($sql);

    $query->bindValue('nom', $_POST["nom"]);
    $query->bindValue('prenom', $_POST["prenom"]);
    $query->bindValue('email', $_POST["email"]);

    if ($pass !== "") {
        $query->bindValue('pass', password_hash($_POST["pass"], PASSWORD_DEFAULT));
    }

    $query->bindValue('id', $_SESSION["security"]["id"]);

    if (!$query->execute()) {
        dump($db->errorInfo());
        die('Veuillez contacter machin avec le code erreur 315647861');
    }

    $_SESSION["security"] = array_merge($_SESSION["security"], $_POST);

}

?>

