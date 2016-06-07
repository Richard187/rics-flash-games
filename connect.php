<?php
error_reporting(0);

$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "flash";

$db_conn = mysqli_connect($mysql_server, $mysql_user, $mysql_password, $mysql_database) or die("Error connecting to db.");
?>