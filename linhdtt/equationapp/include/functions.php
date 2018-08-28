<?php
/**
 * solves 1st degree equation,
 * returns string root
 * @modifies $error
 * @effects
 *  validate $a, $b
 *  if error 
 *      modify $errors & returns null
 *  else 
 *      if $a eq 0 /\ $b eq 0
 *          returns 'many roots'
 *      elseif $a eq 0 /\ $b neq 0
 *          returns 'no root'
 *      else 
 *          returns '1 root x=-b/a'
 * 
 */
function equation1($a, $b, &$message) {
    if (validate($a) && validate($b)) {
        $message="";
        if ($a == 0){
            $message="There is no root ";
            if($b == 0){
            $message="There is many roots ";
            }
        }else{
            $x = -$b / $a;
            $message="There is one root which is ".$x;
            }
    }else{
        $message="Invalid input number";
    }
    return $message;
}

/**
 * solves 2nd degree equation,
 * returns string root
 * @modifies $error
 * @effects
 *  validate $a, $b
 *  if error 
 *      modify $errors & returns null
 *  else 
 *      if a eq 0
 *          invokes #equation1($b, $c, $error) & returns 
 *      else
 *          delta=...            
 *      
 */
function equation2($a, $b, $c, &$message) {
    if(validate($a) && validate($b) && validate($c)){
        if ($a == 0){
            equation1($b,$c,$message);
            return $message;
		}else{
			$delta = $b * $b - 4 * $a * $c;
			if ($delta == 0){
				$x = -$b / (2*$a);
				$message = "The equation has one root which is".$x;
			}
			if ($delta < 0){
				$message = "The equation has no root";
			}
			if ($delta > 0){
				$x1 = (-$b+sqrt($delta))/(2*$a);
				$x2 = (-$b-sqrt($delta))/(2*$a);
				$message = "The equation has two roots ".$x1." and ".$x2;
            }
            return $message;
		}
    }
}

/**
 * validates $param (null, empty, numeric) and
 * returns whether valid or not
 */
function validate($param) {
    if(is_numeric($param)){
        return true;
    }else{
        return false;
    }
}
?>

