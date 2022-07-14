<?php 
session_start();
if ($_SESSION['loggedin'] == true) {
require("../db.php");

if (isset($_POST['ekipa']) && isset($_POST['stopnja']) && isset($_POST['sec'])){
    $team = $_POST['ekipa'];
    $stage = $_POST['stopnja'];
    $sec = $_POST['sec'];

    echo "dela";

    echo $team;
    echo $stage;
    echo $sec;
    $r = $sec + $stage;

    if (empty($sec)) {
		header("Location: admin-result-add.php?error=Prišlo je do napake");
	    exit();
    }
    else{
        /* $sql2 = "SELECT id FROM categories WHERE title = '$category'";
        $query2= mysqli_query($conn, $sql2);
        $result2 = mysqli_fetch_array($query2);
        $c_id = $result2['id']; */
        echo $r;

	    $sql = "SELECT id FROM teams WHERE id=$team";
		$query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query);
        $team_id = $result['id'];
        var_dump(is_int($team_id));

		if (mysqli_num_rows($query) == 0) {
            echo "kekec22";
			header("Location: admin-result-add.php?error=Prišlo je do napake");
	        exit();
		}else {
            $sql3 = "SELECT * FROM results WHERE team_id = $team_id";
            $result3 = mysqli_query($conn, $sql3);
            while ($row3= mysqli_fetch_array($result3)){
                $t1 = $row3['time_1'];
            }
            if(mysqli_num_rows($result3) > 0) {
                echo "jojjojo";
                $sum = $t1 + $r;
                $sql4 = "UPDATE results SET time_2 = $r, sum = $sum  WHERE team_id = $team_id;";
                if ($conn->query($sql4) === TRUE) {
                    header("Location: admin-teams.php");
                    exit();
                  } else {
                  }
            }else {
                $sql2 = "INSERT INTO results (time_1, team_id) VALUES($r, $team_id)";
                if (mysqli_query($conn, $sql2)) {
                    echo "kekec";
                    $message = "Uspešno ste dodali admina!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Location: admin-pannel.php");
                    exit();
              } else {
              }
            }
		}
    }
}else{
    echo "kekec si";
	header("Location: admin-panel.php?error=Prislo_je_do_napake");
	exit();
    // echo $team;
    // echo $stage;
    // echo $sec;
}
}
else {
    header("Location: ../index.php");
	exit();
}