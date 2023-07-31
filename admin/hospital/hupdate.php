<?php
include("connection.php");

$id = $_GET['uid'];

$query = "SELECT * FROM hospitals WHERE id = '$id'";
$data = mysqli_query($conn, $query);
$result= mysqli_fetch_assoc($data);

?>
<?php 
$title="Update | Hospital";
require '../head.php'; ?>



<head>
  <title>Update Hospital</title>
</head>
 <div class="container cont">
      

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active">Hospital</a>
      </li>
     
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active">
        <form method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Name</label>
          <input type="name" name="hname" placeholder="Hospital Name" class="form-control mb-4" value="<?php echo $result['hname']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Email</label>
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4" value="<?php echo $result['hemail']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital Phone</label>
          <input type="text" name="hphone" placeholder="Hospital Phone" class="form-control mb-4" value="<?php echo $result['hphone']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Hospital City</label>
          <input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-4" value="<?php echo $result['hcity']?>">
         <input type="submit" name="update" value="Update" class="btn btn-primary btn-block mb-4">
        </form>
       </div>
    </div>
</div>
</div>
</div>
</div>


<?php
  
  if(isset($_POST['update'])){
    $name = $_POST['hname'];
    $email = $_POST['hemail'];
    $phone = $_POST['hphone'];
    $city = $_POST['hcity'];


    $query = "UPDATE hospitals SET hname = '$name',hemail = '$email',hphone = '$phone',hcity = '$city' WHERE id = '$id' ";

    $q1 = mysqli_query($conn,$query);

    if($q1){
      header("location:hospital.php");
    }
    else{
      echo "Information not Updated";
    }
  }


?>