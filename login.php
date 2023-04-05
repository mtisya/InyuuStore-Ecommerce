<?php
session_start();
include 'includes/dbconnect.php';
$email = addslashes($_GET["email"]);
$password = addslashes( $_GET["password"]);
$md5password = md5($_GET['password']);
$qry = "SELECT email,password FROM instore.user WHERE email='$email'" or die (mysql_error());
$rs = $db->query($qry);
$resp = $rs->fetch();
if ($resp<=0){
	echo "-1";
	}
else {
while ($row = $rs->fetch(PDO::FETCH_ASSOC)){
//validate inputted password with $user password
	if(password_verify($password, $row['password'])){
//action after a successful login
		echo "1";
		header("location: index-2.html");
		$_SESSION["email"] = $email;
		}
	else {
		echo "Incorrect email or password, please try login with correct values";
		}
	}
}
?>