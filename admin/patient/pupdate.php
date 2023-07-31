<?php $title="Receiver Profile"; ?>
<?php require '../head.php';?>
<?php
include("connection.php");
$id = $_GET['uid'];

$query = "SELECT * FROM receivers WHERE id = '$id'";

$q1 = mysqli_query($conn,$query);

$data = mysqli_num_rows($q1);

$row = mysqli_fetch_assoc($q1);

?>
<body>
	

	<div class="container cont">

 

<br>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-8 mb-5">
				<div class="card">
					<div class="card-body">
					   <form method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Name</label>
						<input type="text" name="rname" value="<?php echo $row['rname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Email</label>
						<input type="email" name="remail" value="<?php echo $row['remail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Password</label>
						<input type="text" name="rpassword" value="<?php echo $row['rpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Phone Number</label>
						<input type="text" name="rphone" value="<?php echo $row['rphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver City</label>
						<input type="text" name="rcity" value="<?php echo $row['rcity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Receiver Blood Group</label>
						<select class="form-control mb-3" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>A-</option>
                             <option>A+</option>
                             <option>B-</option>
                             <option>B+</option>
                             <option>AB-</option>
                             <option>AB+</option>
                             <option>O-</option>
                             <option>O+</option>
                        </select>
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php

	if(isset($_POST['update'])){
    $rname = $_POST['rname'];
    $remail = $_POST['remail'];
    $rphone = $_POST['rphone'];
    $bg = $_POST['bg'];
    $rcity = $_POST['rcity'];
    $rpassword = $_POST['rpassword'];
    $update = "UPDATE receivers SET rname='$rname', remail='$remail', rpassword='$rpassword', rphone='$rphone', rbg='$bg',rcity='$rcity' WHERE id='$id'";
    
    $q1 = mysqli_query($conn,$update);

    if($q1){
    	header("location:patient.php");
    }
    else{
    	echo "Data Not Update";
    }
}





?>