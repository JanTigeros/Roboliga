<?php
session_start();
if ($_SESSION['loggedin'] == true) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/admin-pannel.css">
</head>

<body>
    <div id="page-container">
        <?php require('admin-header.php'); ?>
        <div id="page-content">
            <div id="container">
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-teams.php'">
                    <h2>Vse Ekipe</h2>
                    <p>Tukaj si lahko ogledate vse prijavljenje ekipe</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-users.php'">
                    <h2>Vsi Admini</h2>
                    <p>Tukaj si lahko ogledate vse admine, ki imajo dostop do nadzorne plošče</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-register.php'">
                    <h2>Dodaj Admina</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-register.php'">
                    <h2>Vse Novice</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-register.php'">
                    <h2>Dodaj Novico</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-register.php'">
                    <h2>Dodaj Admina</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}
else {
    header("Location: index.php");
	exit();
}
?>