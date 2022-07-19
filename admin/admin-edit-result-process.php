<?php
session_start();
if ($_SESSION['loggedin'] == true) {
    require("../db.php");

    if (isset($_POST['result']) && isset($_POST['stopnja']) && isset($_POST['sec'])){
        $ir = $_POST['result'];
        $stage = $_POST['stopnja'];
        $sec = $_POST['sec'];
        $r_id = $_POST['a-id'];

        echo "dela";

        echo $ir;
        echo $stage;
        echo $sec;
        $r = $sec + $stage;
            /* $sql2 = "SELECT id FROM categories WHERE title = '$category'";
            $query2= mysqli_query($conn, $sql2);
            $result2 = mysqli_fetch_array($query2);
            $c_id = $result2['id'];
            echo $r;
            $sql = "SELECT id FROM teams WHERE id=$team";
            $query = mysqli_query($conn, $sql);
            $result = mysqli_fetch_array($query);
            $team_id = $result['id'];
            var_dump(is_int($team_id)); */

            $sql3 = "SELECT * FROM results WHERE r_id = $r_id";
            $result3 = mysqli_query($conn, $sql3);
            while ($row3= mysqli_fetch_array($result3)){
                $t1 = $row3['time_1'];
                $t2 = $row3['time_2'];
                }
            if($ir == 2) {
                echo "jojjojo";
                $sum = $t1 + $r;
                $sql4 = "UPDATE results SET time_2 = $r, sum = $sum  WHERE r_id = $r_id;";
                if ($conn->query($sql4) === TRUE) {
                    header("Location: admin-results.php");
                    exit();
                    } else {
                    }
            }elseif ($ir == 1) {
                echo "jojjojo";
                $sum = $t2 + $r;
                $sql5 = "UPDATE results SET time_1 = $r, sum = $sum  WHERE r_id = $r_id;";
                if ($conn->query($sql5) === TRUE) {
                    header("Location: admin-results.php");
                    exit();
                    } else {
                    }
            }
            else {
                header("Location: admin-result.php?error=Prišlo je do napake");
                exit();
            }
        }
    else {
        echo "kekec";
        header("Location: admin-result.php?error=Nekaj si pozabil");
        exit();
    }
}
else {
    header("Location: ../index.php");
	exit();
}
?>