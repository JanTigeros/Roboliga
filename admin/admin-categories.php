<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    require("../db.php");
?>
<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorije</title>
    <link rel="stylesheet" href="../css/admin-categories.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="page-container">
        <?php include 'admin-header.php'; ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Kategorija</th>
            <th scope="col">Opis</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM categories";
            $result=mysqli_query($conn, $sql);
            while ($row= mysqli_fetch_array($result)){
            echo'<tr>
                <th scope="row">'.$row['title'].'</th>
                <td>'.$row['desc'].'</td>
                <td><a href="admin-edit-categories.php?a-id='.$row['id'].'">Uredi</a></td>
                </tr>';}
            ?>
        </tbody>
        </table>
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