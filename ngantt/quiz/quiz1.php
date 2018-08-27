<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz App</title>
	<link rel="stylesheet" href="quiz1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 class="heading" >
		<i class="fa fa-question-circle"></i> quiz app </h1>
</head>

	
<body>
<p class="add"> 25 questions </p>
<?php 
	$questions = array("1. Content of questions 1:", "A: answer A", "B: answer B ", "C: answer C ", "D: answer D");
?>
<div class="abc"> 

<?php for($i=0; $i<3; $i++) { ?><article>

<form id="font" action="">	
	<div class="question"> <?php echo $questions[0] ?> </div> 
<input class="answer" name="1" type="radio"> <?php echo "$questions[1]" ?> <br>
<input class="answer" name="1" type="radio"> <?php echo "$questions[2]" ?> <br>
<input class="answer" name="1" type="radio"> <?php echo "$questions[3]" ?> <br>
</form>

</article>
<?php } ?></div>
<button class="next" id="font" ><a href="http://n.edu/quiz/front/quiz2.php">Next</a></button>
</body>
</html>