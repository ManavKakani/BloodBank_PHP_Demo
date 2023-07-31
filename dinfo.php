<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Donor | Registration"; ?>
<?php require 'head.php'; ?>
<body>

	</div><div class="container cont">

<?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

          <div class="card rounded">
            <ul class="nav nav-tabs justify-content-center bg-light" style="padding: 20px;">
      <li class="nav-item">
        <a class="nav-link active">Donor Registration</a>
      </li>
     
    </ul>

    <div class="tab-content">
       <div class="tab-pane container active">
        <form action="dreg.php" method="post">
          <input type="name" name="name" placeholder="Donor Name" class="form-control mb-4">
          <select name="bg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="email" name="email" placeholder="Donor Email" class="form-control mb-3" required>
          <input type="text" name="city" placeholder="Donor City" class="form-control mb-3" required>
          <input type="tel" name="phone" placeholder="Donor Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="password" name="pass" placeholder="Donor Password" class="form-control mb-4">
         <input type="submit" name="register" value="Register" class="btn btn-primary btn-block mb-4">
        </form>
       </div>


</div>
</div>
</div>
</div>
<?php require 'footer.php' ?>

</body>
</html>