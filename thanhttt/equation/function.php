<?php
$error = null;
$a = $b = $c = null;
$result = '';
function app2 ($a,$b,$c,$result){
    global $result, $a, $b, $c;
    if ($a == 0) {
            // pt bac nhat
            if ($b == 0) {
                if ($c == 0) {
                    $result = 'All values of x are correct';
                } else {
                    $result = 'Math Error!';
                }
            } else {
                $root = -$c / $b;
                $result = 'The equation has one root x = ' . $root;
            }
        } else { // pt bac 2
            $delta = $b * $b - 4 * $a * $c;
            if ($delta == 0) {
                $root = -$b / (2 * $a);
                $result = 'The equation has one root x = ' . $root;
            } else if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $result = 'The root of equation: x1 = ' . $x1 . ' and x2 = ' . $x2;
            } else {
                $result = 'No solution';
            }
        }       
}
?>