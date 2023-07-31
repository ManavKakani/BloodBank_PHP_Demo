<?php 
session_start();
if (isset($_SESSION['aid'])) {
  header("location:info.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Admin | Login"; ?>
<?php require 'head.php'; ?>
<body>


    <div class="container cont">
      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active">Admin</a>
      </li>
     
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active">
        <form action="adminlogin.php" method="post">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Admin Username</label>
          <input type="name" name="aname" placeholder="Admin Username" class="form-control mb-4">
          <label class="text-muted font-weight-bold" class="text-muted font-weight-bold">Admin Password</label>
          <input type="password" name="apassword" placeholder="Admin Password" class="form-control mb-4">
         <input type="submit" name="alogin" value="Login" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


  
    </div>

</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>