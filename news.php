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
        while ($row= mysqli_fetch_array($result)){ ?>
        <a href="news-post.php?p_name=$row['title']."><div class="card" style="cursor: pointer;" onclick="window.location='news-post.php?p_name='.$row['title'].'">
        <?php
            echo '<div class="card-header">
            <img src="'.$row['img'].'" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
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
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            <img src="images/csgo_wp.jpg" alt="rover" />
            </div>
            <div class="card-body">
            <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user-info">
                    <h5>July Dec</h5>
                </div>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>

</body>

</html>