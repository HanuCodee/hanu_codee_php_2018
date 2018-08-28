<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz App</title>
	<link rel="stylesheet" href="quiz1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 class="heading" >
		<i class="fa fa-question-circle"></i> quiz 1 </h1>
</head>

	
<body>
<p class="add"> 25 questions </p>

<div class="abc"> 

<?php 
	$questions = array(
				'questions'=> array(
					'question1'=> array('2. Content of questions 2:', 'A: answer A', 'B: answer B ', 'C: answer C ', 'D: answer D'),
					'question2'=> array('2. Content of questions 2:', 'A: answer A', 'B: answer B ', 'C: answer C ', 'D: answer D'),
					'question3'=> array('3. Content of questions 3:', 'A: answer A', 'B: answer B ', 'C: answer C ', 'D: answer D'),
				),
				'correctans'=> array(
					'question1' => 'correctans1',
					'question2' => 'correctans2',
					'question3' => 'correctans3',
				));
	for ($i = 0; $i <= 7 ; $i ++){
		foreach ($questions as $key) {
			foreach ($questions as $value) {
				# code...
			}

		
?>
<article>

<form id="font" action="">	
	<div class="question"> <?php echo $key1 ?> </div> 
<input class="answer" name="1" type="radio"> <?php echo $value ?> <br>
<input class="answer" name="1" type="radio"> <?php echo $value ?> <br>
<input class="answer" name="1" type="radio"> <?php echo $value ?> <br>
</form>

</article>
<?php }} ?></div>
<button class="next" id="font" ><a href="http://n.edu/quiz/front/quiz2.html">Next</a></button>
</body>
</html>