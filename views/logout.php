<?php

require_once "security/logout.php";

header('Location: ' . $_SERVER["HTTP_REFERER"]);
exit();
