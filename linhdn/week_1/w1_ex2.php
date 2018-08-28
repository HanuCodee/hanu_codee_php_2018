<!DOCTYPE html>
<html>
    <body>
        <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $delta = ($b*$b) - (4*$a*$c);
        
        if ($delta < 0){
        echo 'Phương trình vô nghiệm';
        }
        else if ($delta == 0){
         $x = (-$b/2*$a);
         echo 'Phương trình có nghiệm x1 = x2 = '. $x;
        }
        else {
         $x1 = (-$b + sqrt($delta))/2*$a ;
         $x2 = (-$b - sqrt($delta))/2*$a;
         echo 'Phương trình có 2 nghiệm phân biệt:' ."<br>";
         echo 'x1 = '.$x1 ."<br>";
         echo 'x2 = '.$x2;         
        }
        ?>
    </body>
</html>
