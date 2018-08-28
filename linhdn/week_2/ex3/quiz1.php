<?php
session_start();
$ques = null;
$ques1 = "Favorite tea? =,=";
$ques2 = "Say something :3 ";
$mark = 0;

if (isset($_POST['button'])) {
    header("Location: http://localhost/codee/week_2/quiz2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>w2_ex3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
<form align='center' id="q_a">
  <h1>Trắc nghiệm</h1>
  <div id="answers"></div>
  <hr/>

<table align='center'>
<td id="odd" colspan="4">Câu 1: <?= $ques1; ?></td>
<tr>
<td><input type="radio" name="q1" value="q1a"> A. Bubble tea </td>
<td><input type="radio" name="q1" value="q1b"> B. Peach tea </td>
<td><input type="radio" name="q1" value="q1c"> C. Lemon tea </td>
<td><input type="radio" name="q1" value="q1d">D. Strawberry tea </td>
</tr>

<td id="even" colspan="4">Câu 2: <?= $ques2; ?></td>
<tr>
<td><input type="radio" name="q2" value="q2a">A. Đáp án A</td>
<td><input type="radio" name="q2" value="q2b">B. Đáp án B</td>
<td><input type="radio" name="q2" value="q2c">C. Đáp án C</td>
<td><input type="radio" name="q2" value="q2d">D. Đáp án D</td>
</tr>
</table>

  <br><br>
  <form align='center'>
  <input id="next"  type="button" href="http://localhost/Codee/week_2/quiz2.php" value="Next" />
</form>
</form>
</body>
</html>