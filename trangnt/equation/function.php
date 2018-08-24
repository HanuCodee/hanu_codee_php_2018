<?php


/*
*@modifies: $a,$b
*@requires: $a, $b must not null /\ are numeric
*@effects:
    if a eq 0 /\ b eq 0{
        this equation is true with all values root
    }
    else if a eq 0 /\ b neq 0{
        this equation can not be sholved
    } 
    else{
        Equation has 1 root
    }
 */
function ptb1($a, $b,$msg){

	if($a != 0){
           $root = -$b / $a;
           $msg = 'root x = '.$root;
       }else{
            if($b != 0){
               $msg = 'This equation can not be solved.';
            }
            else{
             $msg = 'This equation is true with all value of x.';
            }
        }
    return $msg; 
}
/**
*@modifies: $a, $b, $c
*@requires: $a, $b ,$c are not null /\ are numeric
*@effects:
    if $a eq 0{
        include #ptb1
    }else{
        consider delta
        if(delta eq 0){
            the equation has only one root
        }
        else if(delta < 0){
            the equation has no root
        }
        else if(delta > 0){
            the equation has 2 different roots
        }
        }
    }
*/
function ptb2($a, $b , $c, $msg){
	if($a != 0){
        //pt bac hai
    
        $delta = $b * $b - 4 * $a * $c;
        if($delta < 0){
          $msg='This equation has no root.';
        }
        else if($delta == 0){
            $root = -$b / (2 * $a);
            $msg= 'This equation has only one root: '.$root;
        }
        else if($delta > 0){
            $x2 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
                        
            $msg = 'This equation has two different roots: '. $x1 . '   ' . $x2;
        } 
    }
    else{
	   ptb1($b, $c);
	}
return $msg;
}
?>