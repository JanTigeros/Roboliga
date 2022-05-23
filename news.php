<!DOCTYPE html>
<?php
require("db.php");
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novice</title>
    <link rel="stylesheet" href="css/news.css">
</head>

<body>
    <?php include "header.php"; ?>
    <div id="header">
        <h1>Novice</h1>
    </div>
    <main>
        <?php 
        $sql = "SELECT * FROM news";
        $result=mysqli_query($conn, $sql); 
        while ($row= mysqli_fetch_array($result)){
        echo '<a href="news-post.php?n_id='.$row['id'].'">
        <div class="card2" style="cursor: pointer;">';
            echo '<div class="card-header">
            <img src="images/'.$row['img'].'" alt="rover" />
            </div>
            <div class="card-body">
                <h4>
                    '.$row['title'].'
                </h4>
                <p>
                    '.$row['subtitle'].'
                </p>
                <div class="user-info">
                    <h5>'.$row['date'].'</h5>
                </div>
            </div>
        </div></a>';
                        }
        ?>
    </main>
    <?php include "footer.php"; ?>

</body>

</html>