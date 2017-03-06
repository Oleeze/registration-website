<?php 
	include 'header.php';
?>

<?php
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') !==false){
		echo "<p>Fill out all empty fields!</p>";
	}
	else if(strpos($url, 'error=invalid') !==false){
		echo "<p>Please make sure email is valid!</p>";
	}
	else if(strpos($url, 'error=cpass') !==false){
		echo "<p>Please make sure password is longer then 6 characters!</p>";
	}
	else if(strpos($url, 'error=password') !==false){
		echo "<p>Please make sure passwords match!</p>";
	}
	else if(strpos($url, 'error=cemail') !==false){
		echo "<p>Please make sure emails match!</p>";
	}
	
	else if(strpos($url, 'error=email') !==false){
		echo "<p>Email already exists!</p>";
	}
	
	if (isset($_SESSION['id'])) {
		echo "<p class='pCenter'>Hi there user!</p>";
	} else {
		echo "<p class='pCenter'>You are not logged in!</p>";
	}
	
	if (isset($_SESSION['id'])) {
		echo "<p class='pCenter'>You are already logged in!</p>";
	} else {
		echo "<form action='main.php' method='POST'>
			<input type='text' name='first' placeholder='First name'><br>
			<input type='text' name='last' placeholder='Last name'><br>
			<input type='text' name='uid' placeholder='Username'><br>
			<input type='password' name='pwd' placeholder='Password'><br>
			<input type='password' name='cpwd' placeholder='Confirm password'><br>
			<input type='text' name='email' placeholder='Email'><br>
			<input type='text' name='cemail' placeholder='Confirm email'><br>			  
			<button type='submit'>SIGN UP</button>
			</form>";
	}
?>
	
</body>
</html>
