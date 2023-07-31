<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Campaign"; ?>
<?php require 'head.php'; ?>
<body>


	<?php require 'header.php'; ?>
	<br>
	<div class="container">
    <div class="col-md-4" style="padding-left: 0px;  padding-right: 0px;">
        <img src="image/donation2.jpg" class="img-responsive" width="1100px">
    </div>


<div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>
       <!--  <script>
        	function donor(){
        		window.open("dreg.php");
        	}
        </script> -->
        <?php require 'message.php'; ?>
        <div class="row mb-5">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Advantage of Blood Donation

                	<button class="btn btn-danger" style="margin-left: 550px;"><a href="dinfo.php" style="color:white;font-weight: 600;">Become a Donor</a></button>
                </div>
                <div class="card-body">
                    <dt>Prevents hemochromatosis </dt>
                    <dd>Donating blood would reduce the risk of developing hemochromatosis. This health condition could be inherited at our cost due to alcoholism, anaemia and various other disorders.</dd>
                    <dt>Blood cell production</dt>
                    <dd>After a person donates blood, the body will replenish the blood loss by stimulating the production of new blood cells. The new blood cells would help in maintaining a person’s good health.  </dd>
                    <dt>Lowering cancer risk</dt>
                    <dd>Donating blood helps lower the risk of cancer as the iron stores in the blood are maintained at healthy levels. When there is a reduced iron level in the body, it is linked to lower cancer risk. At the same time, when the iron is too low in the body, it leads to iron deficiency and other related health conditions.</dd>
                    <dt>Heart and liver health</dt>
                    <dd>Donating blood is beneficial as it reduces the risk of heart and liver ailments which are caused due to iron overload in the body. When people consume excess food in the body, they only absorb limited proportions, and the rest of it gets stored in the heart, liver, or pancreas.</dd>
      
                    Visit here to get more health tips.
                    <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020" target="_blank"> World Health Organisation</a>
                </div>
            </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php'; ?>

</body>
</html>