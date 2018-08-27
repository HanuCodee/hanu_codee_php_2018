<?php
include "include/functions.php";
$a = isset($_GET['a'])?$_GET['a']:"";
$b = isset($_GET['b'])?$_GET['b']:"";
$c = isset($_GET['c'])?$_GET['c']:"";
$message;
equation2($a,$b,$c,$message);
include "include/header.php";
?>
<form action="" method="get">
  <h3>Enter the values of a, b and c in the equation ax<sup>2</sup> + bx + c = 0 ?</h3>
		<div align="center">
        	<input class="const" type="number" name="a" value="<?php echo $a;?>">x<sup>2</sup>+
            <input class="const" type="number" name="b" value="<?php echo $b;?>">x+
            <input class="const" type="number" name="c" value="<?php echo $c;?>">=0
			<br></br>
            <br><input class = "btn" type="submit" name="submit" value="Solve it!"></br>
		</div>
<a href="index.php">Back to homepage!</a>
</form>
<?php
echo "<script>alert('$message')</script>";
include "include/footer.php";
?>
<!-- code organization
if: endif
value >
