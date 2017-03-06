<?php 
	include 'header.php';

?>

<h1> Your Profile information is listed below! </h1>

<?php
	if (isset($_SESSION['id'])){ 
			echo "<br>Id: " . $_SESSION['id'];
			echo "<br>First Name: " .  $_SESSION['first'];
			echo "<br>Last Name: " . $_SESSION['last'];
			echo "<br>User name: " . $_SESSION['uid'];
			echo "<br>Password: " . $_SESSION['pwd'];
			echo "<br>Email: " . $_SESSION['email'];
	} else {
		header("Location: badpage.php");
	}
?>

<form action="logout.php">
	<button>LOG OUT</button>
</form>

</body>
</html>