<?php
require("db.php");
session_start();
$res1 = 0;
$res2 = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultati</title>
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php include 'header.php'; ?>
<div class="nav-table"> 
<?php
    $sql2 = "SELECT * FROM categories";
    $result2=mysqli_query($conn, $sql2); 
        while ($row2 = mysqli_fetch_array($result2)){
    echo '<button type="button" class="btn btn-primary">'.$row2['title'].'</button>';
    }
?>
</div>
<table class="table">
<thead>
    <tr>
    <th scope="col">Mesto</th>
    <th scope="col">Ime Ekipe</th>
    <th scope="col">1. čas</th>
    <th scope="col">2. čas</th>
    <th scope="col">Skupaj</th>
    </tr>
</thead>
    <?php 
    $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id";
    $result=mysqli_query($conn, $sql); 
        while ($row = mysqli_fetch_array($result)){
            $res1 = $row['time_1'];
            $res2 = $row['time_2'];
        echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['t_name'].'</td>';

            if ($res1 < 1000) {
                echo '<td>'.$row['time_1'].'</td>';
            }
            else if ($res1 >= 1000 && $res1 < 4000) {
                echo '<td>A</td>';
            }
            else if ($res1 >= 4000 && $res1 < 10000) {
                echo '<td>B</td>';
            }
            else if ($res1 >= 10000 && $res1 < 22000) {
                echo '<td>C</td>';
            }
            else if ($res1 > 22000) {
                echo '<td>D</td>';
            }

            if ($res2 < 1000) {
                echo '<td>'.$row['time_2'].'</td>';
            }
            else if ($res2 >= 1000 && $res2 < 4000) {
                echo '<td>A</td>';
            }
            else if ($res2 >= 4000 && $res2 < 10000) {
                echo '<td>B</td>';
            }
            else if ($res2 >= 10000 && $res2 < 22000) {
                echo '<td>C</td>';
            }
            else if ($res2 >= 22000) {
                echo '<td>D</td>';
            }

            echo '<td>'.$row['sum'].'</td>
        </tr>';
    }
?>

</body>

</html>