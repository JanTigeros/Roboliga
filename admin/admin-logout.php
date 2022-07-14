<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    session_start();
    require("../db.php");
    session_destroy();
    header("Location: ../index.php");
    exit();
}
else {
    header("Location: ../index.php");
	exit();
}
?>