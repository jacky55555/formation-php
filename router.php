<?php

$requestUri = !isset($_SERVER["PATH_INFO"]) ? "/" : $_SERVER["PATH_INFO"];

$requestUri = "/index.php" . $requestUri;

$routes = [
    "/index.php/" => [
        "uri" => "/index.php/",
        "authorised" => "ANNONYMOUS",
        "resource" => "home",
        "methods" => ["GET"]
    ],
    "/index.php/security/login" => [
        "uri" => "/index.php/security/login",
        "authorised" => "ANNONYMOUS",
        "resource" => "login",
        "methods" => ["POST"]
    ],
    "/index.php/security/logout" => [
        "uri" => "/index.php/security/logout",
        "authorised" => "ANNONYMOUS",
        "resource" => "logout",
        "methods" => ["POST"]
    ],
    "/index.php/security/profile" => [
        "uri" => "/index.php/security/profile",
        "authorised" => "security",
        "resource" => "profile",
        "methods" => ["GET", "POST"]
    ],
    "/index.php/security/delete" => [
        "uri" => "/index.php/security/delete",
        "authorised" => "security",
        "resource" => "delete",
        "methods" => ["POST"]
    ],
    "/index.php/security/signup" => [
        "uri" => "/index.php/security/signup",
        "authorised" => "ANNONYMOUS",
        "resource" => "signup",
        "methods" => ["POST"]
    ],
    "/index.php/error" => [
        "uri" => "/index.php/security/error",
        "authorised" => "ANNONYMOUS",
        "resource" => "error",
        "methods" => ["GET"]
    ],

    "/index.php/product" => [
    "uri" => "/index.php/product",
    "authorised" => "ANNONYMOUS",
    "resource" => "product",
    "methods" => ["GET", "POST"]
],
];

$currentRoute = $routes[$requestUri];

if ($currentRoute["authorised"] === "security" && !isset($_SESSION["security"])) {
    header('Location: /');
    exit();
}


if (!in_array($_SERVER["REQUEST_METHOD"], $currentRoute["methods"])) {
    header("Location: /index.php/error?code=401");
    exit;
}