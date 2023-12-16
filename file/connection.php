<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>
