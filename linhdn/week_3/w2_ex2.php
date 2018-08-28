<?php
$msg = $error = null;
if (isset($_GET['a'], $_GET['b'], $_GET['c'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
        if ($a == 0) {
            //bx+c=0
            if($a != 0){
                $root = -$b / $a;
                $msg = 'root x = '.$root;
            }else{
             if($b != 0){
                 $error = 'This equation can not be solved.';
             }else{
                 $root = 'This equation is true with all value of x.';
             }
         } 
     }else {
         //ax^2+bx+c=0
         $delta = $b * $b - 4 * $a * $c;
            if($delta == 0){
                $root = -$b / (2 * $a);
                $msg = 'The equation has one root x = ' . $root;
            } else if ( $delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $msg = 'The root of equation: x1 = '.$x1.' and x2 = '.$x2;
            } else {
                $error  = 'No solution';
            }
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Week1 Ex1</title>
</head>
<style>
fieldset{
    text-align: center;
	border: 1px solid black;
    background-color: lightgrey;
	width: 500px;
    /*padding: 50% 50%;*/
}
p{
    text-align: center;
}
legend{
    font-family: arial;
    font-size: 150%;
    font-weight: bold;
    color: 001100;
}
.error {
    color: red;
    display: block;
    min-height: 50px;
    background: 002200;
}
.info {
    color: 9999FF;
}
</style>
</style>
<body>
       <form action="" method="GET">
        <fieldset>
            <legend>ax^2 + bx + c = 0 equation</legend>
            <?php if ($error): // 0/[]/null/'' ?>
            <p class="error"><?= $error ?></p>
            <?php endif; ?>
            <p>   
                <label for="a">a: </label>
                <input autofocus="true" type="number" id="a" name="a" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="ennter number a...">
            </p>
            <p>
                <label for="b">b: </label>
                <input type="number" name="b" id="b" value="<?php echo isset($_GET['b'])?$_GET['b']:''; ?>" placeholder="ennter number b...">
            </p>
            <p>
                <label for="c">c: </label>
                <input type="number" name="c" id="b\c"value="<?php echo isset($_GET['c'])?$_GET['c']:''; ?>" placeholder="ennter number c...">
            </p>
            <input type="submit" name="exe" value="Execute">
            <?php if($msg): ?>
            <p class="info"><?= $msg ?></p>
            <?php endif; ?>
        </fieldset>
        <br>
    </form> </body>
</html>

