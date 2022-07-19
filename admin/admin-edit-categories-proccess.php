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
        <link rel="stylesheet" href="../css/admin-categories.css">
        <title>Adding</title>
    </head>
    <body>
        
    </body>
    </html>
    <?php 

    if (isset($_POST['title']) || isset($_POST['desc'])){

        $title = $conn -> real_escape_string($_POST['title']);
        $desc = $conn -> real_escape_string($_POST['desc']);
        $c_id = $_POST['a-id'];

        $sql = "UPDATE categories SET title = '$title' WHERE id = $c_id;";
        $result = mysqli_query($conn, $sql);
        if ($conn->query($sql) === TRUE) {
            header("Location: admin-categories.php");
            exit();
        } else {
        }

        /* echo $title;
        echo $desc; */

        /* if(isset($_POST["submit"])){
                header("Location: admin-categories.php");
                exit();
        }
        */
        #header("Location: admin-news.php");
    }else {
            header("Location: admin-categories.php?error=Prišlo je do napake");
            exit();
        }
    ?>
<?php
}
else {
    header("Location: ../index.php");
    exit();
}
?>