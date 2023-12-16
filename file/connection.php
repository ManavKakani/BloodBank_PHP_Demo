<?php
$servername = "34.68.176.151";
$username = "root";
$password = "root";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>
