<?php

session_start();

require_once "includes/pdo.php";

//$_SESSION["test"]= "toto";
dump($_SESSION);

$query = $db->query("SELECT * FROM user where id=3");
$_SESSION["user"] = $query->fetch($db::FETCH_ASSOC);