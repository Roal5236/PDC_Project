<style>
body{
    background-image: url('4.jpg');
    font-family: Verdana;
    color: white;
    /*background-size: 1500px 1500px;*/
    /*background-repeat: no-repeat;*/
}
</style>
<title>Question Paper Generator</title>
<body>
	<h1 style="margin: 60px 20px;font-size: 40px;">
		<center>QUESTION PAPER GENERATOR</center>
	</h1>


<form method="post" name="form" action="index.php" style="background-color: #e8e8e8;color: #333;border-radius: 6px; padding: 20px 5px;margin: 40px 470px">

	<center>
		<h2 style="margin: 40px 20px;">
			Please Fill Form To Enter
		</h2>
	</center>
	<center>Enter Number Of Threads: 
	<select name="no">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>
	</center>
		<br><br>
	<center>
		Enter Number of Question Papers: <input type="Number" name="tota"/>
	</center>
		<br><br>

	<center>
		Enter Number of Question per Papers: <input type="Number" name="pap"/>
	</center>
		<br><br>
	<center>
		<input type="submit" value="submit" name="submit"/>
		<br><br>
	</center>
</form>