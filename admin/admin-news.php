<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    require("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-news.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Admin-Novice</title>
</head>
<body>
    <div id="page-container">
        <?php include 'admin-header.php'; ?>
        <table class="table">
        <thead>
            <tr>
            <td scope="col"><button type="button" class="btn mr-md-2 mb-md-0 mb-2 btn-primary" onclick="window.location.href='admin-posts.php'">Dodaj Novico</button></td>         
            </tr>
            <tr>
            <th scope="col">Naslov</th>
            <th scope="col">Podnaslov</th>
            <th scope="col">Datum</th>
            <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM news";
            $result=mysqli_query($conn, $sql);
            while ($row= mysqli_fetch_array($result)){
            echo'<tr>
                <th scope="row">'.$row['title'].'</th>
                <td>'.$row['subtitle'].'</td>
                <td>'.$row['date'].'</td>
                <td><a id="del" href="admin-delete-post.php?a-id='.$row['id'].'">Odstrani novico</a></td>
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