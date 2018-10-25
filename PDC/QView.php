<!DOCTYPE html>
<html>
<title>Question Paper Generator System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<head>
	<style type="text/css">
		body {
			margin-top: 0;
		}
		.div1 h1{
			margin: 0;
			background-color: #e8e8e8;
			color: 2.html333;
			text-align: center;
			font-family: sans-serif;
			padding: 15px 20px;

		}
		.div2 h2{
			background-color: #f8f8f8;
			text-align: center;
			margin: 0;

		}
		.w3-card-4 a:hover {
			text-decoration: none;
		}
	</style>
</head>
<body style="overflow-y:hidden;">

<div class="div1">
	<h1>
		Question Paper Generator System
	</h1>
</div>	

<div class="div2">
	<h2>EXECUTION TIME IS <?php echo $_GET['time'] ?></h2>
</div>

<div class="w3-container" style="text-align: center;margin-left: 12.5%;">
  <br>
  <?php
  		for($i=0;$i<(int)$_GET['tot'];$i++){
  ?>

  <div class="w3-card-4" style="width:20%;float: left;margin-right: 10px;margin-bottom: 20px; ">
  	<a href="file:///C:/xampp/htdocs/PDC/Questions/<?php echo $i ?>.html" style="text-decoration: none;">
	    <img src="111.png" alt="Doc 1" style="width:100%">
	    <div class="w3-container w3-center">
	      <p>Document <?php echo($i+1) ?></p>
	    </div>
	</a>
  </div>

  <?php
	}
  ?>

    <br><br>


</div>

</body>
</html>