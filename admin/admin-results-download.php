<?php
session_start();
if ($_SESSION['loggedin'] == true) {
require("../db.php");
$res1 = 0;
$res2 = 0;

$sql4 = "SELECT COUNT(*) AS total FROM `results`";
$result4=mysqli_query($conn, $sql4); 
while ($row4 = mysqli_fetch_array($result4)){
    $first_categori = $row4['total'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultati</title>
    <link rel="stylesheet" href="../css/results.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
<div id="page-container">
    <?php require('admin-header.php'); ?>
    <div id="main-tab">
        <div class="nav-table"> 
            <button class="btn btn-primary kekec" onclick="tableToCSV()">
                <span class="glyphicon glyphicon-download"></span>
                Download list
            </button>
        </div>
        <table class="table" id="f-table">
            <!-- 1. kategorija -->
            <div>
                <?php
                    $sql2 = "SELECT * FROM categories WHERE id = 1";
                    $result2=mysqli_query($conn, $sql2); 
                        while ($row2 = mysqli_fetch_array($result2)){
                    echo '<th id="tab-title" colspan="3">'.$row2['title'].'</th>';
                    }
                ?>
                <tr>
                <th scope="col">Ime Ekipe</th>
                <th scope="col">1. cas</th>
                <th scope="col">2. cas</th>
                </tr>
                <?php
                $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 1 ORDER BY r.sum ASC";
                $result=mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_array($result)){
                        $res1 = $row['time_1'];
                        $res2 = $row['time_2'];
                    echo '<tr>
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

                        echo '
                    </tr>';
                }
                ?>
            </div>
            <tr><td></td><td></td><td></td><tr>
            <!-- 2. kategorija -->
            <div>
                <?php
                    $sql2 = "SELECT * FROM categories WHERE id = 2";
                    $result2=mysqli_query($conn, $sql2); 
                        while ($row2 = mysqli_fetch_array($result2)){
                    echo '<th id="tab-title" colspan="3">'.$row2['title'].'</th>';
                    }
                ?>
                <tr>
                <th scope="col">Ime Ekipe</th>
                <th scope="col">1. cas</th>
                <th scope="col">2. cas</th>
                </tr>
                <?php
                $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 2 ORDER BY r.sum ASC";
                $result=mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_array($result)){
                        $res1 = $row['time_1'];
                        $res2 = $row['time_2'];
                    echo '<tr>
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

                        echo '
                    </tr>';
                }
                ?>
            </div>
            <tr><td></td><td></td><td></td><tr>
            <!-- 3. kategorija -->
            <div>
                <?php
                    $sql2 = "SELECT * FROM categories WHERE id = 16";
                    $result2=mysqli_query($conn, $sql2); 
                        while ($row2 = mysqli_fetch_array($result2)){
                    echo '<th id="tab-title" colspan="3">'.$row2['title'].'</th>';
                    }
                ?>
                <tr>
                <th scope="col">Ime Ekipe</th>
                <th scope="col">1. cas</th>
                <th scope="col">2. cas</th>
                </tr>
                <?php
                $sql = "SELECT * FROM teams t INNER JOIN results r ON t.id=r.team_id WHERE t.category_id = 16 ORDER BY r.sum ASC";
                $result=mysqli_query($conn, $sql); 
                    while ($row = mysqli_fetch_array($result)){
                        $res1 = $row['time_1'];
                        $res2 = $row['time_2'];
                    echo '<tr>
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

                        echo '
                    </tr>';
                }
                ?>
            </div>
        </table>
    </div>
</div>
</body>
<script type="text/javascript">
        function tableToCSV() {
 
            // Variable to store the final csv data
            var csv_data = [];
 
            // Get each row data
            var rows = document.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
 
                // Get each column data
                var cols = rows[i].querySelectorAll('td,th');
 
                // Stores each csv row data
                var csvrow = [];
                for (var j = 0; j < cols.length; j++) {
 
                    // Get the text data of each cell
                    // of a row and push it to csvrow
                    csvrow.push(cols[j].innerHTML);
                }
 
                // Combine each column value with comma
                csv_data.push(csvrow.join(","));
            }
 
            // Combine each row data with new line character
            csv_data = csv_data.join('\n');
 
            // Call this function to download csv file 
            downloadCSVFile(csv_data);
 
        }
 
        function downloadCSVFile(csv_data) {
 
            // Create CSV file object and feed
            // our csv_data into it
            CSVFile = new Blob([csv_data], {
                type: "text/csv"
            });
 
            // Create to temporary link to initiate
            // download process
            var temp_link = document.createElement('a');
 
            // Download csv file
            temp_link.download = "rezultatiRoboliga.csv";
            var url = window.URL.createObjectURL(CSVFile);
            temp_link.href = url;
 
            // This link should not be displayed
            temp_link.style.display = "none";
            document.body.appendChild(temp_link);
 
            // Automatically click the link to
            // trigger download
            temp_link.click();
            document.body.removeChild(temp_link);
        }
    </script>

</html>
<?php
}
else {
    header("Location: ../index.php");
	exit();
}
?>