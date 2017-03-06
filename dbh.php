<?php

$conn = mysqli_connect("localhost", "id352323_oleeze", "123456", "id352323_register");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}