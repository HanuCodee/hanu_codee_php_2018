<?php
	include "include/functions.php";
	$a = isset($_GET['a'])?$_GET['a']:"";
	$b = isset($_GET['b'])?$_GET['b']:"";
	$c = isset($_GET['c'])?$_GET['c']:"";
	$message;
	equation2($a,$b,$c,$message);
	include "include/header.php";
?>
<form name="eq2" action="" onsubmit="return validate()" method="get">
  <h3>Enter the values of a, b and c in the equation ax<sup>2</sup> + bx + c = 0 ?</h3>
		<div align="center">
        	<input class="const" type="number" name="a">x<sup>2</sup>+
            <input class="const" type="number" name="b">x+
            <input class="const" type="number" name="c">=0
			<br></br>
            <br><input class = "btn" type="submit" name="submit" value="Solve it!"></br>
		</div>
<a href="index.php">Back to homepage!</a>
</form>
<script>
		function validate(){
			var a,b,c,message;
			a=document.forms["eq2"]["a"].value;
			b=document.forms["eq2"]["b"].value;
            c=document.forms["eq2"]["c"].value;
			if(isNaN(a)|| isNaN(b) || isNaN(c) || a=="" || b== "" || c=="" ){
				message="Invalid input";
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