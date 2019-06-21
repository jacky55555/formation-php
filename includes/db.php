<?php

$connection = mysqli_connect(
    'localhost',
    'formation',
    'PassPhp',
    'phpdeux'


);


if(!$connection) {
    die(
        '<strong> Impossible de se connecter, Veuillez revoir les acces</strong><br>'
        . mysqli_connect_error());
}else {

    echo '<strong> Super ! J\'ai réussi à me connecter à ma base de connée </strong><br>';
};