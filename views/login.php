<?php

require_once "security/login.php";

header('Location: ' . $_SERVER["HTTP_REFERER"]);
exit();
