
<?php

session_start();
require_once 'includes/userDAO.php';

$errorLogin = false;

//dump($_SESSION);die;

if(
    isset($_SESSION) &&
    isset($_SESSION["flashbag"]["error"]) &&
    isset($_SESSION["flashbag"]["error"]["login"])
)
{
    $errorLogin = $_SESSION["flashbag"]["error"]["login"];
    unset($_SESSION["flashbag"]["error"]["login"]);
}

?>


<!DOCTYPE html>

<head>
    <title></title>
</head>

<body

<?php if (isset($_SESSION["security"])); ?>
<form action="security/logout.php" method="post">
    <input type= "submit"


<form>
<?php if(isset($_SESSION["security"])): ?>
<p>Bienvenue <?= $_SESSION["security"]["nom"]; ?></p>
<?php endif; ?>

<?php if (!isset($_SESSION["security"])): ?>
<form action="security/login.php" method="post">
    <?php if ($errorLogin): ?>
        <div>
            <p>Erreur connexion</p>
        </div>
    <?php endif; ?>

    <div>

        <label for="login-email">e-mail :</label>
        <input type="text" id="" name ="nom" >
    </div>
    <div>
        <label for="login-pass">password :</label>
        <input type="text" id="" name ="nom" >
    </div>
    <input type="submit">

</form>
<hr>

<hr>
<form method="post" >
    <legend>Create Account</legend>
    <div>
        <label for ="name">Nom :</label>
        <input type ="text" name ="nom" >
    </div>
    <div>
        <label for="surname">Prénom :</label>
        <input type ="text" name ="prenom" >
    </div>
    <div>
        <label for="email">e-mail :</label>
        <input type="text" id="" ="email" name ="email" >
    </div>
    <div>
        <label for="pass">password :</label>
        <input type ="text" id ="pass" name ="pass" >
    </div>

    <input type="submit">
    </div>

</form>
<?php endif; ?>
<hr>

<form method="get" ></form>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
        <th>pass</th>
    </tr>
    <thead>
    <tbody>
    <?php foreach ($users  as $user) :?>
        <tr>
            <th><?= $user["id"]; ?></th>
            <th><?= $user["nom"]; ?></th>
            <th><?= $user["prenom"]; ?></th>
            <th><?= $user["email"]; ?></th>
            <th><?= $user["pass"]; ?></th>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</form>
</body>
</html>
