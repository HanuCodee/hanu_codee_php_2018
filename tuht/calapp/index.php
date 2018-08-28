<!DOCTYPE html>
<html>
<head>
	<title>cal app</title>
	<h1>Calculator app</h1>
</head>
<style type="text/css">
h1{
	text-transform: uppercase;
	font-family: sans-serif;
	text-align: center;
	color: #5656ce;
}
form{
	border-radius: 5px;
	background-color:#ffcccc;
	width: 400px;
	height: 200px;
	margin: 0 auto;
}
#button1{
	margin-left: 30%;
	width: 150px;
	height: 50px;
	border: none;
	background-color: #33cc00;
}
#button1 a{
	text-decoration: none;
	}
#button2{
	margin-left: 30%;
	width: 150px;
	height: 50px;
	border: none;
	background-color: #ffa31a;
}
#button2 a{
	text-decoration: none;
	}
h3{
	font-family: sans-serif;
	color: #5656ce;
	text-align: center;
	padding-top: 15px; 
	text-transform: uppercase;

}	
</style>
<body>
<form method="post">
	<h3> Choose one of two equations </h3>
	<button name="chonpt1" id="button1"><a href="ex1w2.php">ax + b = 0 </button><br>
	<br>
	<button name="chonpt2" id="button2"><a href="ex2w2.php"> ax^2 + bx + c = 0 </a></button>
</form>
</form>
</body>
</html>