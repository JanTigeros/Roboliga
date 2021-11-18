<?php
<?php
$server = "localhost";
$user = "roboliga-admin";
$pass = "pNC6C8Dpg44mAPX";
$db = "roboliga";

 
try
{
	$pdo = new PDO($server, $user, $pass, $db);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>