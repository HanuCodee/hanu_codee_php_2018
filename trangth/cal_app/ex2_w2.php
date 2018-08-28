<?php
$root= $error = null;
if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];
	if(is_numeric($a) && is_numeric($b) && is_numeric($c)) {
		include ("function_cal.php");
		 $root = equation2($a,$b,$c);
			/*$delta = $b*$b - 4*$a*$c;
			if ($delta > 0) {
			$root1 = (-$b + sqrt($delta))/2*$a;
			$root2 = (-$b - sqrt($delta))/2*$a;
			$msg = "2 roots: $root1 and $root2" ;
		}
		elseif ($delta == 0) {
			$root = -$b/(2*$a);
			$msg =  "2 roots are duplicated: x1 = x2 = $root";
		}else{
			$msg = "No root";
		   
		}
		}
if($a == 0){
			if($b == 0){
				if($c == 0){
					$msg = "Many roots";
				}else{
					$msg = "No root";
				}
			}else{
			    $root = -$c/$b;
				$msg = "1 root: $root";
		} */
		}else{

	$error = "a b c are numeric";
}
}else{ 
	$error = "Fill out a b c";
} 

?>
<html>
<header>
	<title>eq2</title>
<h1 style="text-align: center; color:green; font-family:courier;"> Equation 2: ax^2+bx+c=0 </h1>
</header>
<style type="text/css">
	.eq2{
		width: 400px;
		height: 300px;
		margin-left:530px;
		padding: 15px;
		border: 2px solid seagreen;
        background-color: lightblue;
		text-align: center;
	}
	.nhap{
		background-color:  #ffddb3;
		border: 2px solid green;
		width: 80%;
		height: 30px;
	}
	.khung {
                border-radius: 3px;
            }
	.error{
		text-align: center;
		color: red;
		font-family: courier ;
		background: yellow;
	}
	.msg{
		text-align: center;
		color: blue;
		font-family: courier ;
		background: yellow;
	}
</style>
<body>
<form class="eq2" method="_get">
	<h3 class= "error"><?php echo $error?></h3>
<table align="center" cellpadding="8" cellspacing="8">
            <tr>
                <td class="khung"> Enter a </td>
                <td> <input class="nhap" type="text" name ="a" size ="30" placeholder="enter a number" /> </td>
            </tr>
            <tr>
                <td class="khung"> Enter b </td>
                <td> <input class="nhap" type="text" name="b" size="30" placeholder="enter a number" /> </td>
            </tr>
            <tr>
                <td class="khung"> Enter c </td>
                <td> <input class="nhap" type="text" name="c" size="30" placeholder="enter a number" /> </td>
            </tr>
        </table>
        <?php if($root): ?>
<h3 class="msg"><?php echo $root ?></h3>
         <?php endif; ?>
<input type="submit" value ="Submit"/>
<input type="reset" value="Reset"/>
</form>
</body>
</html>