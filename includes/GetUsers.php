<?php

require_once "includes/pdo.php";

$query = $db->query("SELECT * FROM user");
$users = $query->fetchAll($db::FETCH_ASSOC);