<?php
include("connection.php");
$title = "Patient";
?>
<?php require '../head.php'; ?>

<div class="sub" style="background: #931010;height: 70px;display: flex;font-family: 'Helvetica',sans-serif;justify-content: center;">
		<p style="text-decoration: none;color: white;font-size: 25px;font-weight: bolder;line-height: 75px;">Patient's</p>
</div>
<?php
$query = "SELECT * FROM receivers";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


if($total != 0){

?>
<div class="container">
<h2 align="center" style="margin-top: 30px;margin-bottom: 20px;">Displaying All Reciever Records</h2>
	<table align="center" border="1" cellspacing="1" class="table table-responsive table-striped rounded mt5">
		<tr>
			<th width="5%">ID</th>
			<th width="8%">Name</th>
			<th width="10%">Email</th>
			<th width="10%">Mobile</th>
			<th width="10%">Blood Group</th>
			<th width="10%">city</th>
			<th width="10%">Operation</th>
		</tr>

	<?php

	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>
				<td>". $result["id"]   ."</td>
				<td>". $result["rname"]   ."</td>
				<td>". $result["remail"]   ."</td>
				<td>". $result["rphone"]   ."</td>
				<td>". $result["rbg"]   ."</td>
				<td>". $result["rcity"]   ."</td>
				<td>
				<button><a href='pupdate.php?uid=$result[id]' style='color: black'>Update</a></button>
				</td>
			 </tr>";
	}

}
else{
	echo "No records found";
}

?>

</table>
</div>
