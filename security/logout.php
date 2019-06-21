<?php

session_start();

if (isset($_SESSION["security"])) {
    unset($_SESSION["security"]);
}
