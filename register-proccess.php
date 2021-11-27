<?php
session_start();
require("db.php");

if(isset($_POST['iekipe']))
{
    echo 'Neki štima';
    if(isset($_POST['name2'])){
        $_POST['name2'] = ' ';
    }
    if(isset($_POST['name3'])){
        $_POST['name3'] = ' ';
    }
    if(isset($_POST['name4'])){
        $_POST['name4'] = ' ';
    }
    if(isset($_POST['name5'])){
        $_POST['name5'] = ' ';
    }
    if(isset($_POST['m2'])){
        $_POST[''] = ' ';
    }
    if(isset($_POST['iekipe'],$_POST['name1'],$_POST['m1']) && !empty($_POST['iekipe']) && !empty($_POST['name1']) && !empty($_POST['m1']))
    {
        $team = ($_POST['iekipe']);
        $name1 = ($_POST['name1']);
        $name2 = ($_POST['name2']);
        $name3 = ($_POST['name3']);
        $name4 = ($_POST['name4']);
        $name5 = ($_POST['name5']);
        $category = ($_POST['cat']);
        $school = ($_POST['sola']);
        $mentor1 = ($_POST['m1']);
        $mentor2 = ($_POST['m2']);

        $sql2 = 'SELECT id FROM categories WHERE title = ?';
        $stmt2 = $pdo->prepare('SELECT id FROM categories WHERE title = ?');
        $stmt2->execute([$team]);
        $c_id = $stmt2->fetch();

        $sql3 = 'SELECT id FROM schools WHERE sname = ?';
        $stmt3 = $pdo->prepare('SELECT id FROM schools WHERE sname = ?');
        $stmt3->execute($school);
        $s_id = $stmt3->fetch();

        $pdo->prepare("INSERT INTO teams VALUES (NULL,?,?,?,?,?,?,?,?,?,?)")->execute($data);
        /* INSERT INTO teams (t_name, school_id, category_id, u1, u2, u3, u4, u5, m1, m2) 
        VALUES( 'Ekipa', 1, 1, 'Jan Sajtl', '', '', '', '', 'Mirko Hočevar', '');
        $sql = "INSERT INTO teams (t_name, school_id, category_id, u1, u2, u3, u4, u5, m1, m2) VALUES( ':team', :school, :cat, ':u1', ':u2', ':u3', ':u4', ':u5', ':m1', ':m2')"; */
        echo $stmt3;
        echo $stmt2;
        echo 'ne dela';
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