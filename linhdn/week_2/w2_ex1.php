<?php
$msg = $error = null;
$a=$b='';

if(isset($_GET['a']) && $_GET['b']){
    $a = $_GET['a'];
    $b = $_GET['b'];
    if(is_numeric($a) && is_numeric($b)){

        if($a != 0){
           $root = -$b / $a;
           $msg = 'root x = '.$root;
       }else{
        if($b != 0){
            $error = 'This equation can not be solved.';
        }
        else{
            $root = 'This equation is true with all value of x.';
        }
    } 
}
else{
 $error = 'This equation is true with all value of x.';
}
}
else{
    $error = 'a and b are required.';
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

<body>
       <form action="" method="GET">
        <fieldset>
            <legend>ax + b = 0 equation</legend>
            <?php if ($error): // 0/[]/null/'' ?>
            <p class="error"><?= $error ?></p>
            <?php endif; ?>
            <p>   
                <label for="a">a: </label>
                <input autofocus="true" type="number" id="a" name="a" value="<?php echo isset($_GET['a'])?$_GET['a']:''; ?>" placeholder="number...">
                <!--'dk ? a : b'-->
            </p>
            <p>
                <label for="b">b: </label>
                <input type="number" name="b" id="b">
            </p>
            <input type="submit" name="exe" value="Execute">
            <?php if($msg): ?>
            <p class="info"><?= $msg ?></p>
            <?php endif; ?>
        </fieldset>
        <br>
    </form>
</body>
</html>
<!--Use method 'POST' and input type 'file' for sending file
use "multiple" attribute to send multi files-->