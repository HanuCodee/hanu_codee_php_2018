<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header">
        <center> <img src="admin.png" height="80px">
            <h3> Welcome to Admin Panel</h3>
        </center>
        </div>

        <div id="sidemenu">
            <ul>
               <li><a href="add_question.php" target="_blank"> Add Questions </a></li>
                <li><a href="quiz_list.php" target="_blank"> Question table </a></li>
			</ul>	
        </div>
        <form action="add_question.php" method="POST">
            <h4>Please enter information that you want to post</h4>
            <table align='center' width='400' border='1'>              
                <tr>
                    <td>Question</td>
                    <td><textarea cols="55" rows="5" name="quiz"></textarea></td>
                </tr>
                <tr>
                    <td>Answer A</td>
                    <td><input type="text" size="50" name="answer"/></td>
                </tr>
                <tr>
                    <td>Answer B</td>
                    <td><input type="text" size="50" name="answer"/></td>
                </tr>
                <tr>
                    <td>Answer C</td>
                    <td><input type="text" size="50" name="answer"/></td>
                </tr>
                <tr>
                    <td>Answer D</td>
                    <td><input type="text" size="50" name="answer"/></td>
                </tr>
                <tr>
                    <td>Key</td>
                    <td><input type="text" size="50" name="key"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Add" name="submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
         