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
        <?php
        $rand = rand(1, 3)
        ?>
        <header>Do you want to quiz? :)</header>
        <br>
        <br>
        <div id="wrapper">
            <?php
            if ($rand == 1) {
                echo "                   
            <form action='process.php?id=1' method='post' id='quizForm' id='1'>
                <ol> 
                    <li>
                        <h3> CSS Stands for...?</h3>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='A'/>
                            <label for='answerA'>A) Cascading Style Sheets</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='B'>
                            <label for='answerB'>B) Computer Styled Sections</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='C'>
                            <label for='answerC'>C) Crazy Solid Shapes</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='D'>
                            <label for='answerD'>D) None of the above</label>
                        </div>
                    </li>
                    
                    <li>
                        <h3> CSS Stands for...?</h3>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                            <label for='answerA'>A) Makes text bigger</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='B'>
                            <label for='answerB'>B) Puts text into a list</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='C'>
                            <label for='answerC'>C) Makes text bold</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='D'>
                            <label for='answerD'>D) Divides content</label>
                        </div>
                    </li>
                </ol> 
            </form>";
            }

            if ($rand == 2) {
                echo"
            <form action='process.php?id=3' method='post' id='quizForm' id='2'>
                <ol>
                    <li>
                        <h3> HTML Stands for...?</h3>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='A'/>
                            <label for='answerA'>A) Hypertext Markup Language</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='B'>
                            <label for='answerB'>B) Hyper Throttle Manly Language</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='C'>
                            <label for='answerC'>C) How to make language</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='D'>
                            <label for='answerD'>D) How to move language</label>
                        </div>
                    </li>
                    
                    <li>
                        <h3> How do you insert a comment in a CSS file?</h3>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                            <label for='answerA'>A) // this is a comment //</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='B'>
                            <label for='answerB'>B) // this is a comment</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='C'>
                            <label for='answerC'>C) ' this is a comment</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='D'>
                            <label for='answerD'>D) /* this is a comment */</label>
                        </div>
                    </li> 
                </ol>                
            </form>";
            }

            if ($rand == 3) {
                echo"
            <form action='process.php?id=3' method='post' id='quizForm' id='3'>
                <ol>
                    <li>
                        <h3> PHP Stands for...?</h3>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='A'/>
                            <label for='answerA'>A)Hyper text preprocessor</label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='B'>
                            <label for='answerB'>B) Personal Home Page </label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='C'>
                            <label for='answerC'>C) People Helping People </label>
                        </div>
                        <div>
                            <input type='radio' name='answerOne' id='answerOne' value='D'>
                            <label for='answerD'>D) I don't know </label>
                        </div>
                    </li>
                    
                    <li>
                        <h3> Which HTML attribute is used to define inline styles?</h3>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='A'/>
                            <label for='answerA'>A)Style</label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='B'>
                            <label for='answerB'>B) Class </label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='C'>
                            <label for='answerC'>C) Styles </label>
                        </div>
                        <div>
                            <input type='radio' name='answerTwo' id='answerTwo' value='D'>
                            <label for='answerD'>D) Font </label>
                        </div>
                    </li>
                </ol>
            </form>";
            }
            ?>
            <div>
                <hr>
                <center>
                    <form action="page2.php" method="post">
                        <input type='submit' name="next" value='Next'/>
                    </form>
                </center>
                
            </div>
        </div>
    </body>
</html>