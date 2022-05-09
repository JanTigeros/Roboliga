<?php
session_start();
require("db.php");

if(isset($_POST['iekipe']))
{
    echo 'Neki štima';
    if(isset($_POST['name2'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['name3'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['name4'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['name5'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['m2'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['iekipe'],$_POST['name1'],$_POST['m1']) && !empty($_POST['iekipe']) && !empty($_POST['name1']) && !empty($_POST['m1']))
    {
        $team = ($_POST['iekipe']);
        $u1 = $conn -> real_escape_string($_POST['name1']);
        $u2 = $conn -> real_escape_string($_POST['name2']);
        $u3 = $conn -> real_escape_string($_POST['name3']);
        $u4 = $conn -> real_escape_string($_POST['name4']);
        $u5 = $conn -> real_escape_string($_POST['name5']);
        $category = ($_POST['cat']);
        $school = ($_POST['sola']);
        $m1 = $conn -> real_escape_string($_POST['m1']);
        $m2 = $conn -> real_escape_string($_POST['m2']);

        $sql2 = "SELECT id FROM categories WHERE title = '$category'";
        $query2= mysqli_query($conn, $sql2);
        $result2 = mysqli_fetch_array($query2);
        $c_id = $result2['id'];

        $sql3 = "SELECT id FROM schools WHERE sname = '$school'";
        $query3 = mysqli_query($conn, $sql2);
        $result3 = mysqli_fetch_array($query3);
        $s_id = $result3['id'];

        echo $u3;

        // $pdo->prepare("INSERT INTO teams VALUES (NULL,?,?,?,?,?,?,?,?,?,?)")->execute($data);
 /*        INSERT INTO teams (t_name, school_id, category_id, u1, u2, u3, u4, u5, m1, m2) 
        VALUES( 'Ekipa', 1, 1, 'Jan Sajtl', '', '', '', '', 'Mirko Hočevar', ''); */
        $sql = "INSERT INTO teams (t_name, school_id, category_id, u1, u2, u3, u4, u5, m1, m2) VALUES( '$team', $s_id, $c_id, '$u1', '$u2', '$u3', '$u4', '$u5', '$m1', '$m2')";
        $result4 = mysqli_query($conn, $sql);
           if ($result4) {
           	 header("Location: teams.php");
	         exit();
           }else {
	           	header("register.php");
		        exit();
           }
        /*  else
        {
            $valFirstName = $firstName;
            $valLastName = $lastName;
            $valEmail = '';
            $valPassword = $password;

            $errors[] = 'Email address already registered';
        }
        else
        {
            $errors[] = "Email address is not valid";
        } */
    }
    else
    {
        echo 'jebi ga';

        if(!isset($_POST['iekipe']) || empty($_POST['iekipe']))
        {
            $errors[] = 'Potrebujete ime ekipe';
        }
        if(!isset($_POST['name1']) || empty($_POST['name1']))
        {
            $errors[] = 'Potrebujete vsaj enega člana';
        }
 
        if(!isset($_POST['m1']) || empty($_POST['m1']))
        {
            $errors[] = 'Potrebujete vsaj enega mentorja';
        }     
    }
}
echo 'nope'
/*
if(isset($_POST['submit']))
{
    if(isset($_POST['iekipe'],$_POST['name1'],$_POST['m1') && !empty($_POST['iekipe']) && !empty($_POST['name1']) && !empty($_POST['m1']))
    {
        $team = trim($_POST['iekipe']);
        $name1 = trim($_POST['name1']);
        $name2 = trim($_POST['name2']);
        $name3 = trim($_POST['name3']);
        $name4 = trim($_POST['name4']);
        $name5 = trim($_POST['name5']);
        $category = trim($_POST['cat']);
        $school = trim($_POST['sola']);
        $mentor1 = trim($_POST['m1']);
        $mentor2 = trim($_POST['m2']);

            
        if($stmt->rowCount() == 0)
        {
            $stmt = $pdo->prepare('SELECT id FROM categories WHERE title = :title');
            $stmt->execute(['title' => $category]);
            $cat = $stmt->fetch();
            $c_id = $pdo->query("SELECT id FROM categories WHERE title = '.$category.'");
            $s_id = "SELECT id FROM schools WHERE s.name = '.$school.'";
            $sql = 'INSERT into teams (t_name, school_id, category_id, u1, u2, u3, u4, u5, m1, m2,) values( '.$team.', '.$s_id.', '.$cat.', '.$name1.', '.$name2.', '.$name3.', '.$name4.', '.$name5.', '.$mentor1.', '.$mentor2.')';
        }
        else
        {
            $valteam = $team;
            $valname1 = $name1;
            $valmentor = $mentor1;

            $errors[] = 'Ekipa je že prijavljena';
        }
    }
    else
    {
        if(!isset($_POST['iekipe']) || empty($_POST['iekipe']))
        {
            $errors[] = 'Potrebujete ime ekipe';
        }
        else
        {
            $valteam = $_POST['iekipe'];
        }
        if(!isset($_POST['name1']) || empty($_POST['name1']))
        {
            $errors[] = 'Potrebujete vsaj enega člana';
        }
        else
        {
            $valname1 = $_POST['name1'];
        }
 
        if(!isset($_POST['m1']) || empty($_POST['m1']))
        {
            $errors[] = 'Potrebujete vsaj enega mentorja';
        }
        else
        {
            $valmentor = $_POST['m1'];
        }
        
    }
 
} */
?>