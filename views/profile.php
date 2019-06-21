<?php
require_once "security/profile.php";
?>
<form action="/index.php/security/profile" method="post">
    <legend>Edit Account</legend>

    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= $_SESSION["security"]["nom"] ?>">
    </div>
    <div>
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" value="<?= $_SESSION["security"]["prenom"] ?>">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= $_SESSION["security"]["email"] ?>">
    </div>

    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>

    <div>
        <label for="pass">Pass</label>
        <input type="text" id="pass" name="pass" value="">
    </div>

    <input type="submit">
</form>

<hr>
<hr>
<hr>
<hr>
<hr>

<form action="/index.php/security/delete" method="post">
    <input type="submit" value="Delete my data">
</form>
