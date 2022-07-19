<?php
require("../db.php");
session_start();
if ($_SESSION['loggedin'] == true) {
    $id=$_GET['a-id'];

    $sql2 = "SELECT * FROM categories WHERE id=$id";
    $result2=mysqli_query($conn, $sql2);
    while ($row2= mysqli_fetch_array($result2)){
        $c_title = $row2['title'];
        $c_desc = $row2['desc'];
    }
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
        <form action="admin-edit-categories-proccess.php" method="post">
                <div id="left">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Naslov Ktegorije (max. 30):</label>
                        <input maxlength="30" name="title" type="text" value="<?php echo $c_title ?>" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Opis (max. 255):</label>
                        <textarea maxlength="255" name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="reset" class="btn btn-primary mb-2" onclick="history.back()">Nazaj</button>
                    <button type="submit" name="submit" class="btn btn-primary mb-2">Uredi kategorijo</button>
                </div>
                <input type="hidden" name="a-id" value="<?php echo $id ?>">
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