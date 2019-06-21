<?php

session_start();

require_once "includes/pdo.php";
?>

<form action="security/login.php" method="post">
    <div>
        <label for="login-email">Email</label>
        <input type="text" id="login-email" name="email">
    </div>
    <div>
        <label for="login-pass">Pass</label>
        <input type="text" id="login-pass" name="pass">
    </div>
    <input type="submit">
</form>