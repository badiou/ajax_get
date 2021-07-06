<?php 
$db_server_name="localhost";
$db_user_name="root";
$db_password="";
$database_name="catprod_db";
$connect=mysqli_connect($db_server_name, $db_user_name, $db_password) or die (mysqli_error());
mysqli_select_db($connect,$database_name) or die(mysqli_error());

?>