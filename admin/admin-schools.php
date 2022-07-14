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
    <title>Šole</title>
    <link rel="stylesheet" href="../css/schools.css">
    <link rel="stylesheet" href="../css/admin-users.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div id="page-container">
        <?php include 'admin-header.php'; ?>
        <table class="table">
        <thead>
            <tr>
            <td scope="col"><button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-primary" onclick="window.location.href='../school-add.php'">Dodaj Šolo</button></td>         
            </tr>
            <tr>
            <th scope="col">Ime</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM schools";
            $result=mysqli_query($conn, $sql);
            while ($row= mysqli_fetch_array($result)){
            echo'<tr>
                <th scope="row">'.$row['sname'].'</th>
                <td><a id="del" href="admin-delete-school.php?s-id='.$row['id'].'">Odstrani šolo</a></td>
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