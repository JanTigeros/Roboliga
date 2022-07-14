<?php
session_start();
if ($_SESSION['loggedin'] == true) {
?>
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
require("../db.php");

$title = $conn -> real_escape_string($_POST['title']);
$desc = $conn -> real_escape_string($_POST['desc']);
$fun = ($_POST['fun']);

$sql = "INSERT INTO `categories`(`title`, `desc`, `function`) VALUES ('$title','$desc','$fun');";
$result = mysqli_query($conn, $sql);

/* echo $title;
echo $desc; */

if ($result) {
    $message = "Uspešno ste dodali kategorijo!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<div class="loader"></div>';
    header( "refresh:3;url=admin-categories.php" );
    exit();
}else {
    header( "refresh:3;url=admin-categories-add.php" );
    exit();
}

/* if(isset($_POST["submit"])){
        header("Location: admin-categories.php");
        exit();
}
 */
#header("Location: admin-news.php");
}
else {
    header("Location: ../index.php");
	exit();
}
?>