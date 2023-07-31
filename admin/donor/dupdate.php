<?php
include("connection.php");

$id = $_GET['uid'];

$query = "SELECT * FROM donor WHERE id = '$id'";
$data = mysqli_query($conn, $query);
$result= mysqli_fetch_assoc($data);

?>
<?php 
$title="Update | Donor";
require '../head.php'; ?>



<head>
  <title>Update Donor</title>
</head>
<br>
 <div class="container cont">
      

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active">Donor</a>
      </li>
     
    </ul>
<br>
   <div class="tab-content">
       <div class="tab-pane container active">
        <form action="" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor Name</label>
          <input type="name" name="name" placeholder="Donor Name" class="form-control mb-4" value="<?php echo $result['name']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor Blood Group</label>
          <select name="bg" class="form-control mb-3" required>
                <option selected><?php echo $result['bg']?></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor email</label>
          <input type="email" name="email" placeholder="Donor Email" class="form-control mb-3" required value="<?php echo $result['email']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor city</label>
          <input type="text" name="city" placeholder="Donor City" class="form-control mb-3" required value="<?php echo $result['city']?>">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Donor Phone Number</label>
          <input type="tel" name="phone" placeholder="Donor Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit" value="<?php echo $result['phone']?>">
         <input type="submit" name="register" value="Register" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


<?php
  
 require "connection.php";
  if(isset($_POST['register'])){
    $name = $_POST['name'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];


    $query = "UPDATE donor SET name = '$name',bg='$bg',email = '$email',phone = '$phone',city = '$city' WHERE id = '$id' ";

    $q1 = mysqli_query($conn,$query);

    if($q1){
      header("location:donor.php");
    }
    else{
      echo "Information not Updated";
    }
  }


?>