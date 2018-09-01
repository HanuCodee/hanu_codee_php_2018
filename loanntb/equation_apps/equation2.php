<?php
include ('function.php');

if (isset($_POST['number_a'], $_POST['number_b'], $_POST['number_c'])) {
    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    $c = $_POST['number_c'];
    equation2($a, $b, $c, $error);
}
if (isset($_POST['back'])) {
    header("Location: home.php");
}
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
            <form name="input" method="post" onsubmit="validateInput()">
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
            <form method="post">
                <button name="back" type="submit">Back</button>
            </form>
            <div id="result">
                <?= $result; ?>
            </div>
            <div id="error">
                <?= $error; ?>
            </div>
        </div>
        <script>
            function validateInput() {
                var a = document.forms["input"]["number_a"].value;
                var b = document.forms["input"]["number_b"].value;
                var c = document.forms["input"]["number_c"].value;

                if (isNaN(a) || isNaN(b) || isNaN(c)) {
                    window.alert("You must enter real numbers a, b and c!");
                }
            }
        </script>
    </body>
</html>