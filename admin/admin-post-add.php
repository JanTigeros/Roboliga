<?php 
session_start();
require("../db.php");

$title = filter_input(INPUT_POST, 'title');
$text = filter_input(INPUT_POST, 'text');
$bait_text = filter_input(INPUT_POST, 'bait_text');

$date = date("y-m-d", time());

$image = $_FILES["image"]["name"];

$target_dir = "../images/";

$target_file = $target_dir . basename($_FILES["image"]["name"]);

$sql = "INSERT INTO news (title, subtitle, text, date, img) VALUES('$title', '$bait_text', '$text', '$date', '$image');";
$result = mysqli_query($conn, $sql);

if(isset($_POST["submit"])){
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "<br>WORKED";
        echo $image;
        echo $date;
        echo $text;
        header("Location: admin-news.php");
        exit();
    } else {
        echo "<br> Niste dodali slike pojdite nazaj!";
    }
}

#header("Location: admin-news.php");
?>