<!DOCTYPE html>
<html>
    <body>
        <?php
        if(isset($_GET['numbera']) && isset($_GET['numberb'])){
            $a = $_GET['numbera'];
            $b = $_GET['numberb'];
            $x = -($b)/$a;
        if ($a == ''){
           echo $x = 'a is empty';
        }
        elseif ($b == ''){
           echo $x = 'b is empty';
        }
        else if ($a == 0){
           echo $x = 'a must be diffrent from 0';
        }
        else {
           echo 'Phương trình có 1 nghiệm: x = ' .$x;
        }
    }
        ?>
    </body>
</html>
