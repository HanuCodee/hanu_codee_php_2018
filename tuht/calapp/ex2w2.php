<?php
$error = null;
$resu = null;
if(isset($_GET['numbera']) && isset($_GET['numberb']) && isset($_GET['numberc'])){
	$a = $_GET['numbera'];
	$b = $_GET['numberb'];
	$c = $_GET['numberc'];
	if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
		include 'func.php';
		$resu = giaipt2($a, $b, $c);

	}else{
	$error = "re enter number a, b and c";
}
}else{ 
	$error = "please full fill empty box";
} 
?>
<html>
<header>
	<title>ex2</title>
<h1 style="text-align: center;"> Equation App: ax^2 + bx + c = 0</h1>
</header>
<style type="text/css">
h1{
	font-family: sans-serif;
}
	#dieninput{
		width: 380px;
		height: 280px;
		margin-left:450px;
		padding: 10px;
		border: none;
        background-color: #d7ffcc;
		text-align: center;
		margin: 0 auto;
		}	
	.nhap{
		background-color:  #ffccb3;
		border: 2px solid green;
		width: 80%;
		height: 30px;
	}
	.error{
		text-align: center;
		color: red;
		font-family: tahoma;
	}
	.mess{
		text-align: center;
		color: blue;
		font-family: tahoma;
	}
	#gui{
		border: none;
		background-color: #ffa31a;
		color: white;
		width: 80px;
		height: 40px;
	}
</style>
<body>
<form id="dieninput" metthod="get">
<h4 class="error"><?php echo $error ?></h4>
Enter number a:<br>
<input class="nhap" type="text" name="numbera" value="" placeholder="number...."><br>
Enter number b:<br>
<input type="text" class="nhap" name="numberb" value="" placeholder="number..."><br>
Enter number c:<br>
<input type="text" class="nhap" name="numberc" value="" placeholder="number..."><br>
<h4 class="mess"><?php echo $resu ?></h4>
<input type="submit" name="Submit" id="gui" ><br>
</form>
</body>
</html>