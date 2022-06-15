<?php
require("../db.php");
session_start();
if ($_SESSION['loggedin'] == true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-posts.css">
    <link rel="stylesheet" href="../css/admin-pannel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Dodaj Novico</title>
</head>
<body>
<div id="page-container">
    <?php require('admin-header.php'); ?>
    <div id="main">
        <form action="admin-categories-add-proccess.php" method="post">
                <div id="left">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Naslov Ktegorije (max. 30):</label>
                        <input maxlength="30" name="title" type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Opis (max. 255):</label>
                        <textarea maxlength="255" name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Funkcija (izberi 1,2,3):</label>
                        <br>
                        <?php
                        //$stmt2 = $pdo->query('SELECT * FROM schools');
                        echo '<select name="fun">';
                        $sql1 = "SELECT * FROM categories WHERE function = 1";
                        $result1=mysqli_query($conn, $sql1); 
                        if (mysqli_num_rows($result1) == 0) {
                                echo '<option value="1">1</option>';
                        }
                        else {
                                echo '<option value="1" disabled>1</option>';
                        }

                        $sql2 = "SELECT * FROM categories WHERE function = 2";
                        $result2=mysqli_query($conn, $sql2); 
                        if (mysqli_num_rows($result2) == 0) {
                                echo '<option value="2">2</option>';
                        }
                        else {
                                echo '<option value="2" disabled>2</option>';
                        }

                        $sql3 = "SELECT * FROM categories WHERE function = 3";
                        $result3=mysqli_query($conn, $sql3); 
                        if (mysqli_num_rows($result1) == 0) {
                                echo '<option value="3">3</option>';
                        }
                        else {
                                echo '<option value="3" disabled>3</option>';
                        }
                        echo '</select>';
                        ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-2">Dodaj kategorijo</button>
                </div>
        </form>
    </div>
</body>
</html>
<?php
}
else {
    header("Location: ../index.php");
	exit();
}
?>