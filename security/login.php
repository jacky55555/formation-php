<?php


require_once 'includes/pdo.php';

if (
    $_SERVER["REQUEST_METHOD"] !== "POST" ||
    (empty($_POST) || $_POST["email"] === "" || $_POST["pass"] === "")
) {
    header('Location: /index.php/');
    exit();
}

$email = $_POST["email"];
$pass = $_POST["pass"];

$query = $db->query(
    "SELECT * FROM user WHERE email='" . $email . "'"
);

$user = $query->fetch($db::FETCH_ASSOC);

if (!password_verify($pass, $user["pass"])) {
    $_SESSION["flashbag"] = [
        "error" => [
            "login" => $email
        ]
    ];


    header('Location: /index.php/');
    exit();
}

// add user session
$_SESSION["security"] = $user;
