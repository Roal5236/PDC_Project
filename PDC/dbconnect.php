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


?>