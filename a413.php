<?php
$msg = '';
$num = '';
	if(isset($_POST['form_submit'])) {
		$num = $_POST['num'];
		$msg = factorial_of_a_number($num);

	}
function factorial_of_a_number($n)
{
	if($n >= 0)
	{
		if($n == 0)
	    {
		   return 1;
	    }
	  	else 
	    {	
		   return $n * factorial_of_a_number($n-1);
	    }
	}
	else
	{
		return 'Invalid!! Insert Positive Ineteger';
	}
}
  
// print_r(factorial_of_a_number(4)."\n");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body><center>
<table border=2>
<tr><td>
	<div class="w3-container w3-half w3-margin-top">
		
		<form class="w3-container w3-card-4" method="POST">
		<center><h2><b><i><font color=yellow >Factorial</font></i></b></h2></center>
			<br>
			<br>
			<input  class="w3-input" type="w3-input" name="num" placeholder="Enter number">
			<br>
			<br>
			<input class="w3-button w3-yellow w3-right" type="submit" name="form_submit">
			<br>
			<br>
		</form>
	</div>
	<br><br>
	<h1><?php echo 'Factorial of the number <b> '. $num . '</b> is <b>' . $msg;  ?></h1>
	</td></tr></table></center>
</body>
</html>