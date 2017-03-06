<?php 
	include 'header.php';
?>

<form action="lobby.php" method="POST">
	<input type="text" name="email" placeholder="Email"><br>
	<input type="password" name="pwd" placeholder="Password"><br>
	<button type="submit">SIGN IN</button>
</form>

<?php
	if (isset($_SESSION['id'])){
			echo "<p>You are already logged in, check out your profile</p>";
	} else {
		echo "<p>You are not logged in!</p>";
	}
	
	if (isset($_SESSION['id'])){
		echo "";
	} else {
		echo "<p>If you are sent to the home page it is because your information is invalid</p>";
	}
?>

</body>
</html>