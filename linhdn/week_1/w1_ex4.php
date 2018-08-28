<!DOCTYPE html>
<html>
     <body>
        <?php
        
        $month = $_GET['month'];
        switch ($month) {
            case 1:
                echo 'Tháng 1 có 31 ngày.';
                break;
            case 2:
                echo 'Tháng 2 có hoặc 29 ngày.';
                break;
            case 3:
                echo 'Tháng 3 có 31 ngày.';
                break;
            case 4:
                echo 'Tháng 4 có 30 ngày.';
                break;
            case 5:
                echo 'Tháng 5 có 31 ngày.';
                break;
            case 6:
                echo 'Tháng 6 có 30 ngày.';
                break;
            case 7:
                echo 'Tháng 7 có 31 ngày.';
                break;
            case 8:
                echo 'Tháng 8 có 31 ngày.';
                break;
            case 9:
                echo 'Tháng 9 có 30 ngày.';
                break;
            case 10:
                echo 'Tháng 10 có 31 ngày.';
                break;
            case 11:
                echo 'Tháng 11 có 30 ngày.';
                break;
            case 12:
                echo 'Tháng 12 có 31 ngày.';
                break;

            default:
                echo'Tháng không tồn tại!';
                break;
        }
        ?>
    </body>
</html>
