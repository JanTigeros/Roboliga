<!DOCTYPE html>
<?php
require("db.php");
session_start();
$n_id=$_GET['n_id'];
?>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/news-post.css">
    <title>Objava</title>
</head>

<body>
<?php 
        $sql = "SELECT * FROM news WHERE id=$n_id";
        $result=mysqli_query($conn, $sql); 
        while ($row= mysqli_fetch_array($result)){
    echo'
    <div class="header">
        <h2>'.$row['title'].'</h2>
    </div>
    <div class="main">
            <div class="card">
                <h2>'.$row['subtitle'].'</h2>
                <h5>'.$row['date'].'</h5>
                <div class="card-img">
                    <img src="images/'.$row['img'].'">
                </div>
                <p>'.$row['text'].'</p>
                <a href="news.php"><- Nazaj na novice</a>
            </div>
    </div>';}?>

</body>

</html>