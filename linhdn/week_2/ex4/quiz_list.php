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
        <form action="quiz_list.php" method="POST">
         
        <table align='center' width='900' border='1'>
            <tr style="background: #bdc3c7;  color: black;">
                <th>ID</th>
                <th>Question</th>
                <th>Answer</th>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            <tr>
                <td>1</td>
                <td>What kind of bubble tea do  you like?</td>
                <td>Peach bubble tea</td>
                <td><a href='http://localhost/Codee/week_2/ex4/edit.php'>Edit</a></td>
                <td><a href='http://localhost/Codee/week_2/ex4/delete.php'>Delete</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Say something</td>
                <td>awwww </td>
                <td><a href='http://localhost/Codee/week_2/ex4/edit.php'>Edit</a></td>
                <td><a href='http://localhost/Codee/week_2/ex4/delete.php'>Delete</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>This is question 3</td>
                <td>Yep, I know =,=</td>
                <td><a href='http://localhost/Codee/week_2/ex4/edit.php'>Edit</a></td>
                <td><a href='http://localhost/Codee/week_2/ex4/delete.php'>Delete</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>This is question 4</td>
                <td>wooooooooow</td>
                <td><a href='http://localhost/Codee/week_2/ex4/edit.php'>Edit</a></td>
                <td><a href='http://localhost/Codee/week_2/ex4/delete.php'>Delete</a></td>
            </tr>
        </form>
        </table>
    </body>
</html>