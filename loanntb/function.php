<?php
/**
 * @input 2 real numbers a, b
 * @return the root(s) of 1st degree equation ax + b = 0
 */
$result = "";
$error = "";

//function do_first_degree() {
    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    $eq = $a . "x" . " + " . $b . " = 0";

    if (!is_numeric($a)) {
        $error = "The value of a is invalid, enter a real number!";
    } else if (!is_numeric($b)) {
        $error = "The value of b is invalid, enter a real number!";
    } else {
        if ($a == 0) {
            if ($b == 0) {
                $result = "The equation " . $eq . " has many roots";
            } else {
                $error = "The equation " . $eq . " has no root";
            }
        } else {
            if ($b == 0) {
                $result = "The equation " . $eq . " has one root x = 0";
            } else {
                $root = -$b / $a;
                $result = "The equation " . $eq . " has one root x = " . $root;
            }
        }
    }
//}
?>
