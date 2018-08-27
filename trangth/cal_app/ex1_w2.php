
<?php
 $root= $error = null;
if (isset ($_GET['a']) && ($_GET['b'])) {
	$a = $_GET ['a'];
	$b = $_GET ['b'];
    if(is_numeric($a) && is_numeric($b)){
        include ('function_cal.php');
        $root = equation1($a, $b);
		/* if ($a == 0) {
			if ($b == 0) { 
				$msg=  "Many roots" ;
				} else {
					$msg = "No root";
						}
 		} else { 
 			$nghiem = -($b)/$a ;
			$msg = "Root is: ". $nghiem;
			} */
    } else{
    $error = "a b are numeric";
    }
} else {
	$error = "Fill out a b " ;
} 

?>

<html> 
    <header>
        <title> eq1 </title>
        <meta charset="utf-8">
        <style type="text/css">
            .eq1{
                width: 400px;
                height: 300px;
                margin-left: 530px;
                padding: 15px;
                border: 2px solid green;
                background-color: lightblue;
                text-align: center;  
            }
            .nhap{
                background-color: #ffddb3;
                border: 2px solid green;
                width: 80%;
                height: 30px;
            }
            .khung {
                background: #ffeea3;
                border: 2px solid green ;
            }
            .error{
                text-align: center;
                color: red;
                font-family: courier ;
                background-color: yellow;
            }
            .msg{
                text-align: center;
                color: blue;
                font-family: courier ;
                background-color: yellow;
            }   
        </style>
         <body>
         	<h1 style="font-family:courier; color:green; text-align: center;">Equation 1: ax+b=0 </h1>
         <form class="eq1" action="ex1_w2.php" method="_GET">
            <h3 class = "error"> <?php echo $error ?> </h3>
        <table align="center" cellpadding="8" cellspacing="8" border="2" >
        	<tr>
        		<td class="khung"> Enter a </td>
        		<td> <input class="nhap" type="text" name ="a" size ="30" placeholder="enter a number" /> </td>
        	</tr>
        	<tr>
        		<td class="khung"> Enter b </td>
        		<td> <input class="nhap" type="text" name="b" size="30" placeholder="enter a number" /> </td>
        	</tr>
        </table>
        <h3 class="msg"> <?php echo $root ?></h3>
         <input type="submit" value="Submit"  />
         <input type="reset" value="Reset"/>
        </form>
            </body>
    </header>
</html>
