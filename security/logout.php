<?php

if (isset($_SESSION["security"])) {
    unset($_SESSION["security"]);
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
