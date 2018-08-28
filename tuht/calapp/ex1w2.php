<?php
$error = null;
$result = null;
if(isset($_GET['numbera']) && isset($_GET['numberb'])){
$a = $_GET['numbera'];
$b = $_GET['numberb'];
if(is_numeric($a) && is_numeric($b)){
	   include 'func.php';
       $result =  giaipt1($a, $b);
}else{
 $error = "REENTER NUMBER A & B";
}
}else{
	$error = "Please enter number a and number b";
}
?>
<html>
<header>
	<title> Exercise 1</title>
<h1 style="color:light blue; font-family: tahoma; text-align: center;"> Equation App: ax+ b = 0 </h1>
</header>
<style type="text/css">
	#nhapinput{
		width: 380px;
		height: 280px;
		text-align: center;
		background-color: lightblue;
		border: none;
		margin: 0  auto;
	}
	.fill{
		width: 80%;
		height: 30px;
		border: 5px;
		border-color: navy;
		background-color: #d9ff66;
	}
	.error{
		text-align: center;
		color: red;
		font-family: tahoma;
		padding: 10px; 
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
<form metthod="get" id="nhapinput">
	<h4 class="error"><?php echo $error ?></h4>
<p>Enter number a</p>
<input type="text" class="fill" name="numbera" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter nunmber....">
<p>Enter number b</p>
<input type="text" class="fill" name="numberb" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="enter number....">
<h4 style="text-align: center; color: blue; font-family: tahoma"><?php echo $result ?></h4>
<input type="submit" name="Submit" id="gui" ><br>
</form>
</body>
</html>