<?php 
include ('function.php');
if (isset($_POST['number_a']) && (isset($_POST['number_b']))) {
    $a = $_POST['number_a'];
    $b = $_POST['number_b'];
    equation1($a, $b, $error);
}
if (isset($_POST['back'])) {
    header("Location: home.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation 1</title>
        <link rel="stylesheet" href="equation.css">
    </head>
    <body>
        <header>
            Equation App
        </header>
        <div class="equa">
            <form name="input" method="post" onsubmit="validateInput()"> <!-- validateInput() differs from return validateInput()? -->
                <label>
                    Number a:
                </label>
                <input name="number_a" type="text" placeholder="Enter a here"><br>
                <label>
                    Number b:
                </label>
                <input name="number_b" type="text" placeholder="Enter b here"><br>
                <button name="button" type="submit">Quất</button><br>
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

                if (isNaN(a) || isNaN(b)) {
                    window.alert("You must enter real numbers a and b!");
                }
            }
        </script>
    </body>
</html>