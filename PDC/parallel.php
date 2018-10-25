<?php
	include('pthreads.php')
	include('conf.php');
	include('dbconnect.php');

	$time_start = microtime(true);


	$i=0;
	$total=$_POST['tota'];
	$no=$_POST['no'];

	$task = class extends Thread {

		eio_set_max_parallel($no);


	    public function thread_exec()
	    {
			$begin= "<!DOCTYPE html>
				<html>
				<head>
					<title>".$i."</title>
				</head>
				<body style='width:120%;''>
					<p>".echo(Thread::getCurrentThreadId()) ."</p>
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
			$i++;
	    }
	};

	//Creating Objects
	for($j=0;$j<$total;$j++){
		 $stack[$j] = new $task;
	}

	foreach ( $stack as $t ) {
    $t->start();
	}

	$time_end = microtime(true);
 
	//Subtract the two times to get seconds
	 
	$time = $time_end - $time_start;


?>

	 	<a href="QView.php?tot=<?php echo $_POST['tota'] ?>&time=<?php echo $time ?>"><h1>GO TO Q Paper Viewer</h1></a>
