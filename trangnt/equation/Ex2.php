<?php
include('function.php');
$msg = $err = '';
//$a = $b = $c ='';
        if (isset($_GET['a']) && isset($_GET['b']) && isset( $_GET['c'])) {
            $i=0;
            var_dump($i);
            
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $msg =  ptb2($a, $b, $c, $msg);
        }else{
            $err ='a b c are required !';
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Week1 Ex2</title>
    <style>
        fieldset{
            text-align: center;
            /*padding: 50% 50%;*/
             background-color: white;
             margin: 200px;
        }
        p{
            text-align: center;
        }
        body{
            background-color: linen;
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
            text-align: center;
            background-color: linen;
        }
        p.mss{
            color: green;
            text-align: center;
            background-color: linen;
        }

    </style>
</head>

<form action="" method="GET">
        <fieldset>
            <legend>ax<sup>2</sup> + bx + c = 0</legend>
            <?php if( $err) ?>
            <p class="err"><?= $err ?></p>
            <p>
                <label for="a">a: </label>
                <input autofocus="true" type="number"  id="a" name="a" value="<?php echo isset($_GET['a']) ? $_GET['a'] : '' ?>"
                placeholder="enter a....">
            </p>
            <p>
                <label for="b">b: </label>
                <input type="number" id="b" name="b" value="<?php echo isset($_GET['b']) ? $_GET['b'] : '' ?>" placeholder="enter b...">
            </p>
            <p>
                <label for="c">c: </label>
                <input type="number" id="c" name="c" value="<?php echo isset($_GET['c']) ? $_GET['c'] : '' ?>" placeholder="enter c...">
            </p>
            <?php if($msg) ?>
            <p class="mss"><?=$msg ?></p>
            <input type="submit" name="exe" value="Execute">
        </fieldset>
    </form>

	<body style="background-color: linen">
		
            <script></script>
	</body>
</html>