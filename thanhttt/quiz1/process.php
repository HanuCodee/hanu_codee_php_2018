<html>
<head>
<style type="text/css">
#wrapper {
	
	width:950px;
	 height:auto;
	 padding: 13px;
	 margin-right:auto;
	 margin-left:auto;
	 background-color:#fff;
}
body{
    background-color: lightblue;
    
}
</style>
</head>
<?php 

	$fid = $_GET['id'];

?>
<body>

<div id="wrapper">

<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />

<?php
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
        $answer4= $_POST['answerFour'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "D"){$score++;}
	if ($answer3 == "B"){$score++;}
        if ($answer4 == "C"){$score++;}
	echo "<center><font text_align= 50px>Your Score is <br> $score/5</font></center>";
	
?>




</div>

</body>
</html>