<?php 
session_start(); 
require("db.php");

if (isset($_POST['user']) && isset($_POST['pass'])){
    $user = $conn -> real_escape_string($_POST['user']);
    $pass = $conn -> real_escape_string($_POST['pass']);

    if (empty($user)) {
		header("Location: admin-register.php?error=Potrebno je uporabnisko ime&$user");
	    exit();
	}else if(empty($pass)){
        header("Location: admin-register.php?error=Potrebno je geslo&$user");
	    exit();
	}
    else{

		// hashing the password
        $pass = sha1($pass);

	    $sql = "SELECT * FROM admins WHERE user='$user'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: admin-register.php?error=Uporabniško ime je že zasedeno&$user");
	        exit();
		}else {
           $sql2 = "INSERT INTO admins (user, pass) VALUES('$user', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           echo "kekec";
           if ($result2) {
                $message = "Uspešno ste dodali admina!";
                echo "<script type='text/javascript'>alert('$message');</script>";
           	    header("Location: admin-pannel.php");
	            exit();
           }else {
                header("Location: admin-pannel.php");
                exit();
           }
		}
    }
}else{
	header("Location: admin-panel.php?error=Prislo_je_do_napake");
	exit();
}