<?php

$conn = mysqli_connect(//"localhost", "id", "password" , "name" );

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
