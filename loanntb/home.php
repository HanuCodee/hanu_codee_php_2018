<?php
if (isset($_POST['1st'])) {
<<<<<<< HEAD:loanntb/equation/home.php
    header("Location: equation1.php");
} else if (isset ($_POST['2nd'])) {
    header("Location: equation2.php");
=======
    header("Location: http://localhost/codee/week3/equation1.php");
} else if (isset ($_POST['2nd'])) {
    header("Location: http://localhost/codee/week3/equation2.php");
>>>>>>> de0e1758b8b1d27743502bc99247ab8352e32d39:loanntb/home.php
}

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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <form method="post">
                <button type="submit" name="1st">1st degree</button>
                <button type="submit" name="2nd">2nd degree</button>
            </form>
        </div>
    </body>
</html>
