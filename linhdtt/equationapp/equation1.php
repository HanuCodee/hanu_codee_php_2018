<?php
include "include/functions.php";
$a = isset($_GET['a'])?$_GET['a']:"";
$b = isset($_GET['b'])?$_GET['b']:"";
$message;
equation1($a,$b,$message);
include "include/header.php";
?>
	<form action="equation1.php" method="GET">
    	<h3>Enter the values of a and b in the equation ax+b=0?</h3>
		<div align= "center">
			<input class="const" type="number" name="a" value="<?php echo $a ?>"> x+
			<input class="const" type="number" name="b" value="<?php echo $b ?>"> =0
			<br></br>
			<br><input class="btn" type="submit" name="btn_submit" value="Solve it!"></br>
		</div>
	<a href="index.php">Back to homepage!</a>
	</form>
<?php 
echo "<script>alert('$message')</script>";
include "include/footer.php" ?>
</body>
</html>