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
    <link rel="stylesheet" href="css/schools.css">
    <title>Dodajanje šole</title>
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <form id="login-form" action="school-add-proccess.php" method="post" autocomplete="off">
                <h1>Dodaj Šolo</h1>
                <div class="team-input">
                    <div class="input-container">
                        <input type="text" name="no" required>
                        <label id="input">Ime Šole (Uradno ime)</label>
                    </div>
                </div>
                <div class="team-input">
                    <div class="input-container">
                        <input type="text" name="isole" required>
                        <label id="input">Kratica Šole (npr. ERŠ Velenje)</label>
                    </div>
                </div>
                <div class="btn-div">
                    <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
                    <button type="reset" id="btn-gray">Reset</button>
                    <button type="submit" id="btn-subm" onclick="notify()">Dodaj</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function notify() {
            alert("Uspešno ste dodali šolo");
        }
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