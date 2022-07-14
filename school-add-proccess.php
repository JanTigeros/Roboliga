<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-categories.css">
    <title>Adding</title>
</head>
<body>
    
</body>
</html>
<?php 
session_start();
require("db.php");

$sname = $conn -> real_escape_string($_POST['isole']);

$sql = "INSERT INTO `schools`(`sname`) VALUES ('$sname');";
$result = mysqli_query($conn, $sql);

/* echo $title;
echo $desc; */

if ($result) {
    header("Location: register.php");
        exit();
}else {
    header("Location: school-add.php");
        exit();
}

/* if(isset($_POST["submit"])){
        header("Location: admin-categories.php");
        exit();
}
 */
#header("Location: admin-news.php");
?>