<?php

require_once "pdo.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    dump($_POST);

    $sql = "INSERT INTO user (nom, prenom, email, pass) VALUES (:nom, :prenom, :email, :pass)";

    $query = $db->prepare($sql);

    $query->bindValue("nom", $_POST["nom"]);
    $query->bindValue("prenom", $_POST["prenom"]);
    $query->bindValue("email", $_POST["email"]);
    $query->bindValue("pass", password_hash($_POST["pass"],PASSWORD_BCRYPT));

    if (!$query->execute()) {
        dump($db->errorInfo());
        die("Veuillez contacter machin error code 3155");

    }


}

$query = $db->query("SELECT * FROM user");
$users = $query->fetchAll($db::FETCH_ASSOC);

