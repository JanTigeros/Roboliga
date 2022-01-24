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
            <div id="header">
                <div id="heading">
                    <p>Nadzorna plošča<p>
                </div>
                <div id="logout">
                    <a href="admin-logout.php"><p>Odjava</p></a>
                </div>
            </div>
            <div id="main">
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
</body>

</html>