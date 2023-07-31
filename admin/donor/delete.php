<?php
include("connection.php");

$id = $_GET['uid'];

$query = "DELETE FROM donor WHERE id = '$id'";
$data = mysqli_query($conn, $query);

header("location:donor.php");

?>