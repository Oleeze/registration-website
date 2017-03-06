<?php
session_start();
include 'dbh.php';



$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql ="SELECT * from user WHERE email='$email' AND pwd='$pwd'";

$result=mysqli_query($conn, $sql);
	
if(!$row = mysqli_fetch_assoc($result)){
	echo "Your username or password is incorrect!";
	header("Location: index.php");
} else {
	$_SESSION['id'] = $row['id'];
	$_SESSION['first'] = $row['first'];
	$_SESSION['last'] = $row['last'];
	$_SESSION['uid'] = $row['uid'];
	$_SESSION['pwd'] = $row['pwd'];
	$_SESSION['email'] = $row['email'];

	header("Location: mainmenu.php");
}

