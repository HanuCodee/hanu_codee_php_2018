<!DOCTYPE html>
<html>
    <body>
        <?php
        
        $month = $_GET['month'];
        if (isset($month) && $month > 0 && $month <= 12) { 
            
        if ($month==2){ 
            echo 'Tháng ' .$month .' 28 hoặc 29.';
        }
        elseif ($month==4 || $month==6 || $month==9 || $month==11) {
            echo 'Tháng ' .$month . ' có 30 ngày.';
        }
        else {
            echo 'Tháng ' .$month.' có 31 ngày.';
        }
        } else {
            echo'Tháng không tồn tại!';            
        }
        ?>
    </body>
</html>
