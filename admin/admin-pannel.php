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
    <link rel="stylesheet" href="../css/admin-pannel.css">
</head>

<body>
    <div id="page-container">
        <?php require('admin-header.php'); ?>
        <div id="page-content">
            <div id="container">
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-competition.php'">
                    <h2>Tekmovanje</h2>
                    <p>Tukaj lahko dostopate do strani tekmovanja</p>
                    <img id="ico" src="../images/icons/google.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-teams.php'">
                    <h2>Vse Ekipe</h2>
                    <p>Tukaj si lahko ogledate vse prijavljenje ekipe</p>
                    <img id="ico" src="../images/icons/teams.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-users.php'">
                    <h2>Vsi Admini</h2>
                    <p>Tukaj si lahko ogledate vse admine, ki imajo dostop do nadzorne plošče</p>
                    <img id="ico" src="../images/icons/admin.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-register.php'">
                    <h2>Dodaj Admina</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="../images/icons/admin.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-news.php'">
                    <h2>Vse Novice</h2>
                    <p>Tukaj lahko dodate novega admina, ki lahko dostopa do nadzorne plošče</p>
                    <img id="ico" src="../images/icons/adwords.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-posts.php'">
                    <h2>Dodajte novico</h2>
                    <p>Tukaj lahko dostopate do strani tekmovanja</p>
                    <img id="ico" src="../images/icons/adwords.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-categories.php'">
                    <h2>Kategorije</h2>
                    <p>Tukaj lahko dostopae do kategorij</p>
                    <img id="ico" src="../images/icons/google.png" alt="">
                </div>
                <div class="box box-down cyan" style="cursor: pointer;" onclick="window.location='admin-categories-add.php'">
                    <h2>Dodaj Kategorijo</h2>
                    <p>Tukaj lahko dodate noveo kategorijo</p>
                    <img id="ico" src="../images/icons/google.png" alt="">
                </div>
            </div>
        </div>
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