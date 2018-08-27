<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Week1 Ex3</title>
        <style>
            div{
                /*font-family: italic;*/
                font-size: 90%;
                color: orange;
            }
            form{
                text-align: center;
            }
            h1{
                color: orange;
                text-shadow: 40px 30px yellow;
            }
            p{
                color: green;
                text-align: center;
                font-family: monospace;
            }
            .over{
                outline: thick ridge pink;
                /*box-sizing: border-box;*/
                padding: 30px 40px;
                border-radius: 45px;

            }
            /*"Text-transform: uppercase/ lowercase/capitalize"*/
        </style>
    </head>
    <body>
    <form action="" method="GET">
        <div class="over">
        <h1><label for="mon">Enter month </label></h1>
            <br><br>
        <input autofocus="true" type="number" id="mon" name="month">
        <input type="submit" value="Execute">
        </div>
    </form>


        <?php
        if(isset($_GET['month'])){
            $month = $_GET['month'];
            
            if($month == 2){
                ?>
                <p>
                <?php
                echo 'Tháng 2 có 28 hoặc 29 ngày tùy thuộc vào năm đó.';
                ?>
                </p>
                <?php
            }
            else if($month ==4 or $month == 6 or $month == 9 or $month == 11){

                ?>
                <p>
                <?php
                echo 'Tháng '.$month.' có 30 ngày.';
                ?>
                </p>
                <?php
            }
            else if ($month == 1 or $month ==3 or $month ==5 or $month ==7 or $month ==8 or $month  ==10 or $month ==12){
                echo 'Tháng '.$month.' có 31 ngày.';
            }
            else{
                ?>
                <p>
                <?php
                echo 'Tháng này không tồn tại.';
                ?>
                </p>
                <?php
            }
        }
        else{
            ?>
            <p style="color: red">
            <?php
            echo 'Nhập tháng.';
            ?>
            </p>
            <?php
        }
        ?>
    </body>
</html>
