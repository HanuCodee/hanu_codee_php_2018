<?php
	include "include/functions.php";
	$a = isset($_GET['a'])?$_GET['a']:"";
	$b = isset($_GET['b'])?$_GET['b']:"";
	$message;
	equation1($a,$b,$message);
	include "include/header.php";
?>
	<form name="eq1" action="" method="GET" onsubmit="return validate()">
    	<h3>Enter the values of a and b in the equation ax+b=0?</h3>
		<div align= "center">
			<input class="const" type="number" name="a" required> x+
			<input class="const" type="number" name="b" required> =0
			<br></br>
			<br><input class="btn" type="submit" name="btn_submit" value="Solve it!"></br>
		</div>
	<a href="index.php">Back to homepage!</a>
	</form>
	<script>
		function validate(){
			var a,b,message;
			a=document.forms["eq1"]["a"].value;
			b=document.forms["eq1"]["b"].value;
			if(isNaN(a)|| isNaN(b) || a=="" || b== ""){
				windows.alert('Invalid input');
				return false;
			}else{
				return true;
			}
		}
	</script>
<?php 
	echo "<script> alert('$message'); </script>";
	include "include/footer.php"; 
?>