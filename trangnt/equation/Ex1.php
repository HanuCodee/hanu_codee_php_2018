<?php
include "function.php";
$msg= $error = '';
if(isset($_GET['a']) && isset($_GET['b'])){
$a = $_GET['a'];
$b = $_GET['b'];
ptb1($a, $b, $msg);
}
else{
    $error = 'a and b are required !';
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
    background-color: white;
    margin: 200px;
}
body{
    background-color: linen;
}

p{
    text-align: center;
}
legend{
    font-family: arial;
    font-size: 200%;
    font-weight: bold;
    color: lightblue;
    /*font-size:...vw: the the size of text will follow the size of browser page*/
}

p.err{
    color: red;
    min-height: 50px;
    background: yellow;
    font-weight:bold;
}
p.info {
    color: blue;
    font-weight:bold;
}
</style>

<body>
       <form action="" method="GET">
        <fieldset>
            <legend>ax + b = 0 equation</legend>
            <p>   
                <label for="a">a: </label>
                <input autofocus="true" type="number" id="a" name="a" value="<?php echo isset($_GET['a']) ? $_GET['a']:''; ?>" placeholder="enter a...">
                <!--'dk ? a : b ;'-->
            </p>
            <p>
                <label for="b">b: </label>
                <input type="number" name="b" id="b" value="<?php echo isset($_GET['b']) ? $_GET['b'] : ''; ?>" placeholder="enter b..."> <br><br>
                <?php  if($error): ?>
                <p class = "err"><?php echo $error; ?></p> 
                <?php endif; ?>

                <?php  if($msg): ?>
                <p class = "info"><?php echo $msg;?></p>
                <?php endif;  ?>

                <input style="text-align: center;" type="submit" value="Execute">
        </fieldset>
        <br>
    
    </form>
</body>
</html>
<!--Use method 'POST' and input type 'file' for sending file
use "multiple" attribute to send multi files-->