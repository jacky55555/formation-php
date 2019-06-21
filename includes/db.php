<?php

$connection = mysqli_connect(
    'localhost',
    'formation',
    'PassPhp',
    'phpdeux'
);

if (!$connection) {
    die(
        '<strong> Impossible de se connecter, veuillez revoir les accés</strong><br>'
        . mysqli_connect_error());
} else {
    echo '<strong> Super ! j\'ai réussi à me connecter à ma base de donnée </strong><br>';
}