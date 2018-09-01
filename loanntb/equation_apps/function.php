<?php

$result = "";
$error = "";

/**
 * Solve the 1st degree equation
 * @requires
 *      $a != null /\ $b != null /\ $a is numeric /\ $b is numeric
 * $effects
 *      if $a /\ $b are valid
 *          solve the equation
 *          return the root
 *      else
 *          show error
 */
function equation1($a, $b, &$error) {
    global $result;
    $eq = $a . "x" . " + " . $b . " = 0";

    if (validate1($a, $b) == false) {
        $error = "Invalid number! Please enter real number a and b!";
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
}

/**
 * Solve the 2nd degree equation
 * @requires
 *      $a /\ $b /\ $c != null /\ $a /\ $b /\ $c are numeric
 * $effects
 *      if $a /\ $b /\ $c are valid
 *          solve the equation
 *          return the root
 *      else
 *          show error
 */
function equation2($a, $b, $c, &$error) {
    global $result;
    $eq = $a . "x^2 + " . $b . "x + " . $c . " = 0";

    if (validate2($a, $b, $c) == true) {
        if ($a == 0) {
            equation1($b, $c, $error);
        } else {
            $delta = pow($b, 2) - 4 * $a * $c;
            if ($delta < 0) {
                $error = "The equation " . $eq . " has no root";
            } else if ($delta == 0) {
                $root = -$b / 2 * $a;
                $result = "The equation " . $eq . " has one root x = " . $root;
            } else if ($delta > 0) {
                $root1 = (-$b + sqrt($delta)) / 2 * $a;
                $root2 = (-$b - sqrt($delta)) / 2 * $a;
                $result = "The equation " . $eq . " has two roots x1 = " . $root1 . " and x2 = " . $root2;
            }
        }
    }
}

/**
 * Check whether $a and $b are valid
 * @effects
 *      if $a != null /\ $a is numeric /\ $b != null /\ $b is numeric
 *          return true
 *      else
 *          return false
 */
function validate1($a, $b) {
    if ($a != null && is_numeric($a) && $b != null && is_numeric($b)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Check whether $a and $b are valid
 * @effects
 *      if $a != null /\ $a is numeric /\ $b != null /\ $b is numeric
 *          return true
 *      else
 *          return false
 */
function validate2($a, $b, $c) {
    if ($a != null && is_numeric($a) && $b != null && is_numeric($b) && $c != null && is_numeric($c)) {
        return true;
    } else {
        return false;
    }
}
?>
