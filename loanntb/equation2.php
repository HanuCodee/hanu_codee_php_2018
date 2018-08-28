<?php
/**
 * @input 3 real numbers a, b, c
 * @return the root(s) of 1st degree equation ax + b = 0
 */
$result = "";
$error = "";

if (isset($_POST['button'])) {
    do_second_degree();
}

//function do_second_degree() {
    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    $c = $_POST['number_c'];

    if ($a < 0) {
        $text_a = "(" . $a . ")";
    } else {
        $text_a = $a;
    }
    if ($b < 0) {
        $text_b = "(" . $b . ")";
    } else {
        $text_b = $b;
    }
    if ($c < 0) {
        $text_c = "(" . $c . ")";
    } else {
        $text_c = $c;
    }
    $eq = $text_a . "x^2 + " . $text_b . "x + " . $text_c . " = 0";

    if (!is_numeric($a)) {
        $error = "The value of a is invalid, please enter a real number!";
    } else if (!is_numeric($b)) {
        $error = "The value of b is invalid, please enter a real number!";
    } else if (!is_numeric($c)) {
        $error = "The value of c is invalid, please enter a real number!";
    } else {
        if ($a == 0) {
//            if ($b == 0) {
//                if ($c == 0) {
//                    echo "The equation ".$eq." has many roots";
//                } else {
//                    echo "The equation ".$eq." has no root";
//                }
//            } else {
//                if ($c == 0) {
//                    echo "The equation ".$eq." has one root x = 0";
//                } else {
//                    $root = -$c / $b;
//                    echo "The equation ".$eq." has one root x = " . $root;
//                }
//            }
            include 'function.php';
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
//}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation 2</title>
        <link rel="stylesheet" href="equation.css">
    </head>
    <style>
    </style>
    <body>
        <header>Equation App</header>
        <div class="equa">
            <form method="post">
                <label>
                    Number a:
                </label> 
                <input name="number_a" type="text" placeholder="Enter a"><br>
                <label>
                    Number b:
                </label>
                <input name="number_b" type="text" placeholder="Enter b"><br>
                <label>
                    Number c:
                </label>
                <input name="number_c" type="text" placeholder="Enter c"><br>
                <button name="button" type="submit">Quất</button>
            </form>
            <div id="result">
                <?php
                if (isset($result)) {
                    echo $result;
                }
                ?>
            </div>
            <div id="error">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>
        </div>
    </body>
</html>