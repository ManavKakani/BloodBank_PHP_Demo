<!DOCTYPE html>
<html>
<head>
	
	<title>Admin | Dashbord</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.main{
			width: 100%;
			height: 70px;
			background: #931010;
			color: white;
			font-weight: bolder;
			font-family: "Helvetica",sans-serif;
		}
		.sub{
			width: 30%;
			height: 70px;
			float: left;	
			display: flex;
			justify-content: center;		
		}
		.sub a{
			line-height: 70px;
			
			font-size: 25px;
			text-decoration: none;
			color: white;
		}
		.menu{
			width: 70%;
			height: 70px;
			float: left;			
		}
		.menu ul{
			display: flex;
			justify-content: right;
		}
		.menu ul li{
			list-style: none;
		}
		.menu ul li a{
			text-decoration: none;
			color: white;
			line-height: 70px;
			margin-right: 80px;
		}
		.msg{
			color: grey;
			text-align: center;
			margin-top: 20px;
		}
		.data{
			width: 100%;
			height: 200px;
			/*background: red;*/
			margin-top: 30px;

		}
		.data1{
			width: 20%;
			height: 200px;
			/*background: orange;*/
			float: left;
			margin-left: 220px;
			box-shadow: 0px 0px 10px 4px #b7b0b0;
			text-align: center;
			line-height: 200px;
			font-size: 25px;
			transition: 0.5s;
			cursor: pointer;
			font-family: "Helvetica",sans-serif;
			font-weight: 400;
		}
		
		.data1:hover{
			background: green;
			color: white;
		}
		
		.data2{
			width: 20%;
			height: 200px;
			/*background: orange;*/
			float: left;
			margin-left: 50px;
			box-shadow: 0px 0px 10px 4px #b7b0b0;
			text-align: center;
			line-height: 200px;
			font-size: 25px;
			transition: 0.5s;
			cursor: pointer;
			font-family: "Helvetica",sans-serif;
			font-weight: 400;
		}
		
		.data2:hover{
			background:  #931010;
			color: white;
		}
		
		.data3{
			width: 20%;
			height: 200px;
			/*background: orange;*/
			float: left;
			margin-left: 50px;
			box-shadow: 0px 0px 10px 4px #b7b0b0;
			text-align: center;
			line-height: 200px;
			font-size: 25px;
			transition: 0.5s;
			cursor: pointer;
			font-family: "Helvetica",sans-serif;
			font-weight: 400;
		}
		
		.data3:hover{
			background:  #742ac5;
			color: white;
		}
		

		
	
	</style>
</head>
<body>






<div class="main">

	<div class="sub">
		<p><a href="info.php">Dashbord</a></p>
	</div>
	<div class="menu">
		<ul>
			<li>
				<a href="../index.php">LogOut</a>
			</li>
		</ul>
	</div>
</div>

<h1 class="msg">Hello, <span style="color: #931010;">Admin</span> Manage Your Data From Here....</h1>

<script>
	//hospital file
	function hospital() {
		open("hospital/hospital.php")
	}
	//patient file
	function patient() {
		open("patient/patient.php")
	}
	//donor file
	function donor() {
		open("donor/donor.php")
	}

</script>

<div class="data">
	<div class="data1" onclick="hospital()">
		Hospital
	</div>
	<div class="data2" onclick="patient()">
		Reciever
	</div>
	<div class="data3" onclick="donor()">
		Donor
	</div>
</div>








</body>
</html>