<?php

$errorLogin = false;

if (
        isset($_SESSION) &&
        isset($_SESSION["flashbag"]["error"]) &&
        isset($_SESSION["flashbag"]["error"]["login"])
) {
    $errorLogin = $_SESSION["flashbag"]["error"]["login"];
    unset($_SESSION["flashbag"]["error"]["login"]);
}
?>

<?php if (isset($_SESSION["security"])): ?>
    <a href="/index.php/security/profile">Modifier le profil</a>
<?php endif; ?>

<?php if (isset($_SESSION["security"])): ?>
    <form action="/index.php/security/logout" method="post">
        <input type="submit" value="Logout">
    </form>
<?php endif; ?>

<?php if (isset($_SESSION["security"])): ?>
    <p>Bienvenue <?= $_SESSION["security"]["nom"]; ?></p>
<?php endif; ?>

<?php if (!isset($_SESSION["security"])): ?>
    <form action="/index.php/security/login" method="post">
        <?php if ($errorLogin): ?>
            <div>
                <p>Erreur connexion</p>
            </div>
        <?php endif; ?>
        <div>
            <label for="login-email">Email</label>
            <input type="text" id="login-email" name="email" value="<?= $errorLogin; ?>">
        </div>
        <div>
            <label for="login-pass">Pass</label>
            <input type="text" id="login-pass" name="pass">
        </div>
        <input type="submit">
    </form>
    <hr>
    <hr>
    <hr>
    <form action="/index.php/security/signup" method="post">
        <legend>Create Account</legend>

        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="pass">Pass</label>
            <input type="text" id="pass" name="pass">
        </div>

        <input type="submit">
    </form>
<?php endif; ?>
<hr>

<?php require_once "includes/GetUsers.php"; ?>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Pass</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user["id"]; ?></td>
            <td><?= $user["nom"]; ?></td>
            <td><?= $user["prenom"]; ?></td>
            <td><?= $user["email"]; ?></td>
            <td><?= $user["pass"]; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once "includes/Getproduct.php"; ?>

<table>
    <thead>
    <tr>
        <th>nom</th>
        <th>code</th>
        <th>creer</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $prod["nom"]; ?></td>
            <td><?= $prod["code"]; ?></td>
            <td><?= $prod["creer"]; ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

