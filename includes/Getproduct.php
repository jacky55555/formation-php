<?php


require_once "includes/pdo.php";

$query = $db->query("SELECT * FROM Product");
$users = $query->fetchAll($db::FETCH_ASSOC);
