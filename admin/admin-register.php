<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['loggedin'] == true) {
require("../db.php");
?>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-login-register.css">
    <title>Dodajanje Admina</title>
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <form id="login-form" action="admin-register-proccess.php" method="post" autocomplete="off">
                <h1>Dodaj Admina</h1>
                <div class="team-input">
                    <div class="input-container">
                        <input type="text" name="user" required>
                        <label id="input">Uporabniško ime</label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="pass" required>
                        <label id="input">Geslo</label>
                    </div>
                </div>
                <div class="btn-div">
                    <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
                    <button type="reset" id="btn-gray">Reset</button>
                    <button type="submit" id="btn-subm">Dodaj</button>
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
<?php
}
else {
    header("Location: ../index.php");
	exit();
}
?>