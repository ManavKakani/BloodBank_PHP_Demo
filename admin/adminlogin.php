<?php
session_start();
    require 'connection.php';
    if(isset($_POST['alogin'])){
    $aname=$_POST['aname'];
    $apassword=$_POST['apassword'];
    $sql="select * from adminlogin where username='$aname' and password='$apassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['aname']=$row['aname'];
        $_SESSION['apassword']=$row['apassword'];
        $_SESSION['id']=$row['id'];
        $msg= $_SESSION['aname'].' have logged in.';
        header( "location:info.php?msg=".$msg);
    } 
  }
?>