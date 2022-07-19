<?php
session_start();
require("../db.php");

    if(isset($_POST['user']))
    {
        echo 'Neki štima';

        if(isset($_POST['user'],$_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])){
            $user = $conn -> real_escape_string($_POST['user']);
            $pass = $conn -> real_escape_string($_POST['pass']);

            if (empty($user)) {
                header("Location: admin.php?error=User_Name_is_required");
                exit();
            }else if(empty($pass)){
                header("Location: admin.php?error=Password_is_required");
                exit();
            }else{
                $pass = sha1($pass);
                echo $user;
                echo $pass."Kekec";
                $sql = "SELECT * FROM admins WHERE user='$user' AND pass='$pass'";
                $result = mysqli_query($conn, $sql);
                echo "Bedanec";

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    echo "Pehta";
                    if ($row['user'] === $user && $row['pass'] === $pass) {
                        echo "kekec";
                        $_SESSION['loggedin'] = true;
                        $_SESSION['user'] = $row['user'];
                        header("Location: admin-pannel.php");
                        exit();
                    }
                }else{
                    $_SESSION['loggedin'] = false;
                    header("Location: admin.php?error=Nisi_Admin");
                    exit();
                }
            }
        }else{
            $_SESSION['loggedin'] = false;
            header("Location: admin.php?error=Kekec_ne_dela");
            exit();
        }
    }
    else{
        $_SESSION['loggedin'] = false;
        header("Location: admin.php");
        exit();
    }