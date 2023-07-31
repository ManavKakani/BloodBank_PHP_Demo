<?php
  
  require "connection.php";
  if(isset($_POST['register'])){
    $name = $_POST['name'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $check_email = mysqli_query($conn, "SELECT email FROM donor where email = '$email' ");
    if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:dinfo.php?error=".$error );
    }else{
    $query = "INSERT INTO donor(name,bg,email,city,phone,password) VALUES('$name','$bg','$email','$city','$phone','$pass')";

    $q1 = mysqli_query($conn,$query);

    if ($q1) {
    $msg = "You have successfully registered.";
    header( "location:campaign.php?msg=".$msg);
  }
  }

  }



?>