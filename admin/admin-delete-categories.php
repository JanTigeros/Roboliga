<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    require("../db.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $id=$_GET['a-id'];
    $sql='DELETE FROM categories WHERE id='.$id.';';
    $result=mysqli_query($conn, $sql);
    header("Location: admin-categories.php");
?>
    
</body>
</html>
<?php
}
else {
    header("Location: ../index.php");
	exit();
}
?>