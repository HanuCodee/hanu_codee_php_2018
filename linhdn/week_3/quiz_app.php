<?php 
     $questions = array(
        array(
            'text' => 'Question 1 text',
            'answerA' => 'Answer A',
            'answerB' => 'Answer B',
            'answerC' => 'Answer C',
            'answerD' => 'Answer D',
            'correctAnswer' => 'A'
        ),
        array(
            'text' => 'Question 2 text',
            'answerA' => 'Answer A',
            'answerB' => 'Answer B',
            'answerC' => 'Answer C',
            'answerD' => 'Answer D',
            'correctAnswer' => 'C'
        ),
         array(
            'text' => 'Question 3 text',
            'answerA' => 'Answer A',
            'answerB' => 'Answer B',
            'answerC' => 'Answer C',
            'answerD' => 'Answer D',
            'correctAnswer' => 'D'
        )
);
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title> Quiz app</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header">
        <center><img src="admin.png" height="80px">
            <h3> Welcome to PHP Quiz </h3>
        </center>
        </div>
        <div id="sidemenu">
            <ul>
               <li><a href="home.php" target="_blank"> Home Page </a></li>
               <li><a href="html.php" target="_blank"> HTML Quiz </a></li>
                <li><a href="about_us.php" target="_blank"> About Us </a></li>
			</ul>	
        </div>
        <form action="quiz_app.php" method="POST">
        <div>
        <?php foreach ($questions as $question) {?>
                    <div class="text" align='center'>
                    
                        <?php echo'<label>'.$question['text'].'</label>'; ?>
                    </div>
                    <div class="choice" align='center'>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerA'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerB'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerC'].'</div>'; ?>
                        <?php echo '<div class="ch"><input type="radio">'.$question['answerD'].'</div>'; } ?>
                    </div>
        </div>
        </form>
        <button class="next"><a href="page2.php">Next</a></button>
        </table>
    </body>
</html>