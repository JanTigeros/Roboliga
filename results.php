<?php
require("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultati</title>
    <link rel="stylesheet" href="css/results.css">
</head>

<body>
    <div class="page">
        <?php include 'header.php'; ?>
        <main class="st_viewport">
            <div class="st_wrap_table" data-table_id="0">
                <header class="st_table_header">
                    <h2>Rezultati</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Razultat</div>
                        <div class="st_column _name">Ime ekipe</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_wrap_table" data-table_id="1">
                    <div class="st_table">
                    <?php 
                    $sql = "SELECT * FROM teams WHERE id = 5";
                    $result=mysqli_query($conn, $sql); 
                        while ($row= mysqli_fetch_array($result)){
                        echo '<div class="st_row">
                            <div class="st_column _rank">'.$row['id'].'</div>
                            <div class="st_column _name">'.$row['t_name'].'</div>
                            <div class="st_column _surname">Kunze</div>
                            <div class="st_column _year">2015</div>
                            <div class="st_column _section">Germany</div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="st_wrap_table" data-table_id="2">
                    <div class="st_table">
                    <?php 
                    $sql = "SELECT * FROM teams WHERE id=6";
                    $result=mysqli_query($conn, $sql); 
                        while ($row= mysqli_fetch_array($result)){
                        echo '<div class="st_row">
                            <div class="st_column _rank">'.$row['id'].'</div>
                            <div class="st_column _name">'.$row['t_name'].'</div>
                            <div class="st_column _surname">Kunze</div>
                            <div class="st_column _year">2015</div>
                            <div class="st_column _section">Germany</div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="st_wrap_table" data-table_id="3">
                    <div class="st_table">
                    <?php 
                    $sql = "SELECT * FROM teams WHERE id=7";
                    $result=mysqli_query($conn, $sql); 
                        while ($row= mysqli_fetch_array($result)){
                        echo '<div class="st_row">
                            <div class="st_column _rank">'.$row['id'].'</div>
                            <div class="st_column _name">'.$row['t_name'].'</div>
                            <div class="st_column _surname">Kunze</div>
                            <div class="st_column _year">2015</div>
                            <div class="st_column _section">Germany</div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="st_table">
                <?php 
                    $sql = "SELECT * FROM teams";
                    $result=mysqli_query($conn, $sql); 
                        while ($row= mysqli_fetch_array($result)){
                        echo '<div class="st_row">
                            <div class="st_column _rank">'.$row['id'].'</div>
                            <div class="st_column _name">'.$row['t_name'].'</div>
                            <div class="st_column _surname">Kunze</div>
                            <div class="st_column _year">2015</div>
                            <div class="st_column _section">Germany</div>
                        </div>';
                        }
                        ?>
                </div>
            </div>
        </main>
    </div>

</body>

</html>