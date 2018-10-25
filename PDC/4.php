<?php

$dbconnect = mysqli_connect("localhost", "root", "", "pdc");
	
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

	$sql="SELECT * from questions2";
	$query=mysqli_query($dbconnect, $sql);
	while($rs=mysqli_fetch_assoc($query)){
		$que[(int)$rs['qno']]=$rs['question'];
		$opt1[(int)$rs['qno']]=$rs['option1'];
		$opt2[(int)$rs['qno']]=$rs['option2'];
		$opt3[(int)$rs['qno']]=$rs['option3'];
		$opt4[(int)$rs['qno']]=$rs['option4'];

	}

	$total = (int)$_GET['tot'];
	$no = (int)$_GET['no'];
	$excess=$total%$no;
	$each=($total-$excess)/$no;
	$q=(int)$_GET['pap'];



	for($i=$each*3;$i<$each*4;$i++){

		$begin= "<!DOCTYPE html>
				<html>
				<head>
					<title>".$i."</title>
				</head>
				<body style='width:120%;'>
					<p>4</p>
					<div style='width:50%;margin-right:auto;margin-left:auto;''>
					";

					for($j=1;$j<=$q;$j++){
						$x=mt_rand(1, $q);
						$begin=$begin.
					"
						<h2>".$j.". ".$que[$x]." </h2>
						<div style='width:$100%''>
							<div style='width:50%;float:left'>
								<p>1. ".$opt1[$x]." </p>
								<p>2. ".$opt2[$x]." </p>
							</div>
							<div style='width:50%;float:left'>
								<p>3. ".$opt3[$x]." </p>
								<p>4. ".$opt4[$x]." </p>
							</div>
						</div>
						<br>
						<br>
					";
					}
					$begin=$begin.
					"
				</body>
				</html>";


		$loc= "C:/xampp/htdocs/PDC/Questions/".$i.".html";
		file_put_contents($loc,$begin);	
	}


?>