<?php
/*
*@overview 
 *This class contains the data of equation: ax+b and ax^2+bx+c
@required 
* a b c are numeric
*/ 
$msg = $root =null;
//giai phuong trinh bac 1
/*
@effects
   if  a = 0 && b = 0
       many root
   if a = 0 && b!=0
       no solution
   else 
       x = -b/a
 @return x
*/
function equation1($a,$b){
	if ($a == 0) {
			if ($b == 0) { 
				$msg=  "Many roots" ;
				} else {
					$msg = "No root";
						}
 		} else { 
 			$root = -($b)/$a ;
			$msg = "Root is: ". $root;
	}
	return $msg;
}
 
// giai phuong trinh bac 2
/*@effects 
      if a = 0
         giai pt bac nhat
       else
          delta = b^2 - 4ac
           if delta = 0
               x = -b/2a
            if delta < 0
               no solution
            else
               x1 = (-b +sqrt(delta))/2a
               x2 = (-b -sqrt(delta))/2a
@return 
      x1, x2
   */
function equation2($a,$b,$c){
	if ($a==0) 
		$root=equation1($b,$c);
	    $msg= "Root is $root";
	
	if ($a<>0){
		$delta = $b*$b - 4*$a*$c;
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
	return $msg;
}
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"]))
{
	$root=equation2($_GET["a"],$_GET["b"],$_GET["c"]);
}
 ?>
