<html>
    <head>
        <meta charset="UTF-8">
        <title>Hate Quiz so much</title>
        <style type="text/css">
            body{
                background-color: lightblue; 
            }
            header{
                font-size: 50px;
                text-align: center;
            }

        </style>
        <!--    <FRAMESET COLS="20%,*">
            <FRAME SRC=x.html>
            <FRAME SRC=y.html>
        </FRAMESET>-->
    </head>

    <body>
        <header>Do you want to quiz? :)</header>
        <br>
        <br>
        <div id="wrapper">
            <?php
            echo "                   
            <form action='process.php?id=3' method='post' id='quizForm' id='3'>                 
                    <li>
                        <h3>3) Ai điên nhất?</h3>
                        <div>
                            <input type='radio' name='answerThree' id='answerThree' value='A'/>
                            <label for='answerA'>A) Chính tôi</label>
                        </div>
                        <div>
                            <input type='radio' name='answerThree' id='answerThree' value='B'>
                            <label for='answerB'>B) Không biết</label>
                        </div>
                        <div>
                            <input type='radio' name='answerThree' id='answerThree' value='C'>
                            <label for='answerC'>C) Tất cả</label>
                        </div>
                        <div>
                            <input type='radio' name='answerThree' id='answerThree' value='D'>
                            <label for='answerD'>D) Không ai</label>
                        </div>
                    </li>  
            </form>";
            ?>

            <?php
            echo "                   
            <form action='process.php?id=4' method='post' id='quizForm' id='4'> 
                    <li>
                        <h3>4) Núi nào mà bị chặt ra từng khúc?</h3>
                        <div>
                            <input type='radio' name='answerFour' id='answerFour' value='A'/>
                            <label for='answerA'>A) Hoàng Liên Sơn</label>
                        </div>
                        <div>
                            <input type='radio' name='answerFour' id='answerFour' value='B'>
                            <label for='answerB'>B) Himalaya</label>
                        </div>
                        <div>
                            <input type='radio' name='answerFour' id='answerFour' value='C'>
                            <label for='answerC'>C) Thái Sơn</label>
                        </div>
                        <div>
                            <input type='radio' name='answerFour' id='answerFour' value='D'>
                            <label for='answerD'>D) Ngũ Hành Sơn</label>
                        </div>
                    </li>
            </form>";
            ?>
            <div>            
<!--                <hr>
                <form action="page1.php" method="post">
                    <a align ="left"><input type='submit' name="previous" value='Previous'/></a>
                </form>
                </hr>
                <center>-->
                <form action="process.php" method="post">
                    <input type='submit' name="submit" value='Submit'/>
                </form>
                </center>
            </div>
        </div>
    </body>
</html>