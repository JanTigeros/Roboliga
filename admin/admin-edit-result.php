<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    require("../db.php");
    $id=$_GET['a-id'];
?>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-result-add.css">
    <title>Dodajanje Admina</title>
</head>
<body>
<?php
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <div class="login-container">
        <div class="form-box">
            <form id="login-form" action="admin-edit-result-process.php" method="post" autocomplete="off">
                <h1>Uredi rezultat</h1>
                <div class="select-input">
                    <select name="result" required>
                        <option value="" selected="true" disabled="true" hidden>Izberi rezultat</option>
                        <option value="1">1. čas</option>
                        <option value="2">2. čas</option>
                    </select>
                </div>
                <div class="select-input">
                    <select name="stopnja" required>
                    <option value="0" selected="true" disabled="true" hidden>Črka</option>
                    <option value="0">Uspel</option>
                    <option value="1000">A</option>
                    <option value="4000">B</option>
                    <option value="10000">C</option>
                    <option value="22000">D</option>
                    </select>
                </div>
                <div class="team-input">
                    <div class="input-container">
                        <input id="number" type="number" name="sec" value="0">
                        <label id="input">Sekunde</label>
                    </div>
                </div>
                <input type="hidden" name="a-id" value="<?php echo $id ?>">
                <div class="btn-div">
                    <button type="reset" id="btn-red" onclick="history.back()">Nazaj</button>
                    <button type="reset" id="btn-gray">Reset</button>
                    <button type="submit" id="btn-subm">Uredi</button>
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