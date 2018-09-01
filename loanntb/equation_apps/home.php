<?php

/* note w3 (about array)
 * - $a[] = 0 -> add 0 at the end of the array
 * - [1,2,3] -> declare an array
 * - while - do -> check requirement before do
 * - do - while -> do once before check requirement
 * - vardum/ die() -> debug
 * - require -> alert error if require st empty
 * - require_once (useful for db connection)
 * 
 * - function.php includes 2 functions 
 * 
 * use <a> instead of button
 */

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Equation 1</title>
        <link rel="stylesheet" href="equation.css">
    </head>
    <body>
        <header>Calculator App</header>
        <div class="equa">
            <h3>Which equation do you want to solve?</h3>
            <a id="a1" href="equation1.php">Fist Degree Equation</a>
            <a id="a2" href="equation2.php">Second Degree Equation</a>
        </div>
    </body>
</html>
