
<?php
$mess=null;
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
function giaipt1 ($a, $b){
			if($a == 0){
				if($b == 0){
				$mess = "Many roots X";
				return $mess;
			}else{
				$mess = "no solution";
				return $mess;
			}
			}else{
			    $x = -$b/$a;
				$mess = "solution x = $x";
				return $mess;
		}
	}
/**
@effects 
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
**/
function giaipt2 ($a, $b, $c){
	if($a == 0){
			//giai pt bac nhat 
        $kq = giaipt1($b, $c);
        return $kq;
		}else{
			//giai pt bac 2
			$delta = $b*$b - 4*$a*$c;
			if ($delta > 0) {
			$x1 = (-$b + sqrt($delta))/2*$a;
			$x2 = (-$b - sqrt($delta))/2*$a;
			$mess = "x1 = $x1 <br>"."x2 = $x2<br>";
			return $mess;
		}
		elseif ($delta == 0) {
			$x = -$b/(2*$a);
			$mess =  "there is one solution x = $x";
			return $mess;
		}else{
			$mess = "no solution";
			return $mess;
		   
		}
		}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>

</body>
</html>