	<?php
	$time_start = microtime(true);

	if(!isset($_POST['no'])){
		$a=4;
	}
	else{
		$a=(int)$_POST['no'];
	}

	if(!isset($_POST['pap'])){
		$b=10;
	}
	else{
		$b=(int)$_POST['pap'];
	}


	if($a==1){
		sleep(1);
	?>
		<div style="width:100%;position:absolute;top:2000px;">
			 <iframe src="1.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
			 	<p>Your browser does not support iframes.</p>
			 </iframe> 
		</div>
	<?php
	}
	if($a==2){

	?>
		<div style="width:100%;position:absolute;top:2000px;">
		 <iframe src="1.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="2.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		</div>
	<?php
	}

	if($a==3){

	?>
		<div style="width:100%;position:absolute;top:2000px;">
		 <iframe src="1.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="2.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="3.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 
		</div>
	<?php
	}
	if($a==4){

	?>
		<div style="width:100%;position:absolute;top:2000px;">
		 <iframe src="1.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="2.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="3.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 

		 <iframe src="4.php?tot=<?php echo $_POST['tota'] ?>&no=<?php echo $a ?>&pap=<?php echo $b ?>" style="width:50%;height:100px">
		 	<p>Your browser does not support iframes.</p>
		 </iframe> 
		</div>
	<?php
	}
	$time_end = microtime(true);
 	 
	$time = $time_end - $time_start;
	 	?>

	 	<a href="QView.php?tot=<?php echo $_POST['tota'] ?>&time=<?php echo $time ?>"><h1>GO TO Q Paper Viewer</h1></a>
</body>
</html>