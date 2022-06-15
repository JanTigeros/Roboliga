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
    echo '<button type="button" id="bti" class="btn btn-primary kekec">'.$row2['title'].'</button>';
    }
?>
</div>
<!-- 1. kategorija -->
<div style="display: none;" id="first">
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
        $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 1";
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
    </table>
</div>

<!-- 2. kategorija -->
<div id="second">
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
        $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 2";
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
    </table>
</div>

<!-- 3. kategorija -->
<div id="third">
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
        $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 3";
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
    </table>
</div>

</body>
<script>
    // doda +1 v id
    var list = document.getElementsByClassName("kekec");
    for (var i = 0; i < list.length; i++) {
        list[i].id = "bti" + (i + 1);
    }

    // 1. tabela
    const element = document.getElementById('bti1')

    element.addEventListener("click", () => {
        document.getElementById( 'first' ).style.display = 'block';
        document.getElementById( 'second' ).style.display = 'none';
        document.getElementById( 'third' ).style.display = 'none';
    });

    // 2. tabela
    const element2 = document.getElementById('bti2')

    element2.addEventListener("click", () => {
        document.getElementById( 'second' ).style.display = 'block';
        document.getElementById( 'first' ).style.display = 'none';
        document.getElementById( 'third' ).style.display = 'none';
    });

    // 3. tabela
    const element3 = document.getElementById('bti3')

    element3.addEventListener("click", () => {
        document.getElementById( 'third' ).style.display = 'block';
        document.getElementById( 'first' ).style.display = 'none';
        document.getElementById( 'second' ).style.display = 'none';
    });
</script>

</html>