<!DOCTYPE html>
<?php 
require("db.php");
session_start();
?>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Prijava ekipe</title>
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <form id="login-form" action="register-proccess.php" method="post">
                <h1>Prijavi Ekipo</h1>
                <div class="team-input">
                    <div class="input-container">
                        <input type="text" name="iekipe" required>
                        <label id="input">Ime Ekipe</label>
                    </div>
                </div>
                <div class="name-input">
                    <div class="input-container" id="input">
                            <input type="text" name="name1" required>
                            <label id="input">Ime in Priimek Člana</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="name2">
                            <label id="input">Ime in Priimek Člana 2</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="name3">
                            <label id="input">Ime in Priimek Člana 3</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="name4">
                            <label id="input">Ime in Priimek Člana 4</label>
                        </div>
                        <div class="input-container">
                            <input type="text" name="name5">
                            <label id="input">Ime in Priimek Člana 5</label>
                        </div>
                </div>
                <div class="select-input">
                    <?php
                    //$stmt = $pdo->query('SELECT * FROM categories');
                    $sql = "SELECT * FROM categories";
                    echo '<select name="cat">';
                    $result=mysqli_query($conn, $sql); 
                    while ($row= mysqli_fetch_array($result)){
                    //while ($row = $stmt->fetch()){
                        echo '<option value="" selected="true" disabled="true" hidden>Izberite Kategorijo</option>
                        <option value="'.$row['title'].'">'.$row['title'].'</option>';
                    }
                    echo '</select>';
                    ?>
                </div>
                <div class="select-input">
                    <?php
                    //$stmt2 = $pdo->query('SELECT * FROM schools');
                    $sql2 = "SELECT * FROM schools";
                    echo '<select name="sola">';
                    $result2=mysqli_query($conn, $sql2); 
                    while ($row2= mysqli_fetch_array($result2)){
                    // while ($row2 = $stmt2->fetch()){
                        echo '<option value="" selected="true" disabled="true" hidden>Vaša šola</option>
                        <option value="'.$row2['sname'].'">'.$row2['sname'].'</option>';
                    }
                    echo '</select>';
                    ?>
                </div>
                <div class="name-input">
                    <div class="input-container">
                        <input type="text" name="m1" required>
                        <label id="input">Ime in Priimek Menotrja</label>
                    </div>
                    <div class="input-container">
                        <input type="text" name="m2">
                        <label id="input">Ime in Priimek Menotrja 2</label>
                    </div>
                </div>
                <div class="btn-div">
                    <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
                    <button type="reset" id="btn-gray">Reset</button>
                    <button type="submit" id="btn-subm">Prijavi</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
</body>
</html>