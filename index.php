<?php
session_start();

require_once "router.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php
require_once "views/" . $currentRoute['resource'] . ".php";
?>

</body>
</html>
