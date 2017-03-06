<?php
session_start();
include 'dbh.php';


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$cpwd = $_POST['cpwd'];
$email = $_POST['email'];
$cemail = $_POST['cemail'];


if (empty($first)){
	header("Location: register.php?error=empty");
	exit();
}

if (empty($last)){
	header("Location: register.php?error=empty");
	exit();
}
if (empty($uid)){
	header("Location: register.php?error=empty");
	exit();
}
if (empty($pwd)){
	header("Location: register.php?error=empty");
	exit();
}
if (empty($cpwd)){
	header("Location: register.php?error=empty");
	exit();
}
if (empty($email)){
	header("Location: register.php?error=empty");
	exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php?error=invalid");
	exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  exit();
}

if (empty($cemail)){
	header("Location: register.php?error=empty");
	exit();
}
if (strlen($pwd) < 6){
	header("Location: register.php?error=cpass");
	exit();
}

if ($pwd !== $cpwd){
	header("Location: register.php?error=password");
	exit();
}

if ($email != $cemail){
	header("Location: register.php?error=cemail");
	exit();
}

else {
	$sql = "SELECT email FROM user WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	$emailcheck = mysqli_num_rows($result);
	if ($emailcheck > 0) {
	header("Location: register.php?error=email");
	exit();
	} else {
		$sql ="INSERT INTO user (first, last, uid, pwd, cpwd, email, cemail)
		VALUES ('$first', '$last', '$uid', '$pwd', '$cpwd', '$email', '$cemail')";
		$result=mysqli_query($conn, $sql);
	
		header("Location: lobby.php");	
	}
}

