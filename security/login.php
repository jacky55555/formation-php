<?php

session_start();

include_once "../includes/pdo.php" ;

if($_SERVER["REQUEST_METHOD"] !== "POST" &&
    empty($_POST) || $_POST["email"] === "" || $_POST["pass"] === "")

{
    //verifier le mot de passe
    header("Location: /");
}

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = $db->query(
    "SELECT * FROM user WHERE email='" . $email . "'"
);
$user = $query->fetch($db::FETCH_ASSOC);

if(!password_verify($pass, $user["pass"])){
    header("Location: /");
    $_SESSION["flashbag"] = [
        "error" => [
            "login" => $email

        ]
    ];

    header("Location: /");
    exit();
}

//add user session
$_SESSION["security"] = $user;
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit();