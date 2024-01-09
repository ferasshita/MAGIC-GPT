<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "magic";
$conn = mysqli_connect($hostname,$username,$password,$database)or die(mysqli_error());
$conn->set_charset("utf8");
