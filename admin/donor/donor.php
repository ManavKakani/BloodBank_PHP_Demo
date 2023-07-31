<?php

$title="Donor";
include("connection.php");

?>
<?php require '../head.php'; ?>

<div class="sub" style="background: #931010;height: 70px;display: flex;font-family: 'Helvetica',sans-serif;justify-content: center;">
		<p style="text-decoration: none;color: white;font-size: 25px;font-weight: bolder;line-height: 75px;">Donor'S</p>
</div>
<?php
$query = "SELECT * FROM donor";

$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);


if($total != 0){

?>
<div class="container">
<h2 align="center" style="margin-top: 30px;margin-bottom: 20px;">Displaying All Donor Records</h2>
	<table align="center" border="1" cellspacing="1" class="table table-responsive table-striped rounded mt5">
		<tr>
			<th width="5%">ID</th>
			<th width="20%">Name</th>
			<th width="10%">BG</th>
			<th width="10%">email</th>
			<th width="10%">City</th>
			<th width="10%">Phone</th>
			<th width="20%">Operation</th>
		</tr>

	<?php

	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>
				<td>". $result["id"]   ."</td>
				<td>". $result["name"]   ."</td>
				<td>". $result["bg"]   ."</td>
				<td>". $result["email"]   ."</td>
				<td>". $result["city"]   ."</td>
				<td>". $result["phone"]   ."</td>
				<td>
				<button><a href='dupdate.php?uid=$result[id]' style='color: black'>Update</a></button>
				<button><a href='delete.php?uid=$result[id]' style='color: black'>Delete</a></button>
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

