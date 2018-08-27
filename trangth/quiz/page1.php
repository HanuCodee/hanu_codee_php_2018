<?php
$question = array(
'Q1' => array('content'=>'Rose or blossom cherry or cherry or camilla', 'a'=>'Rose', 'b'=>'Blossom cherry', 'c'=>'Cherry', 'd'=>'Camilla','correct'=>'Blossom Cherry'),
'Q2' => array('content'=>'Content of question 2', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q3' => array('content'=>'Content of question 3', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'A'),
'Q4' => array('content'=>'Content of question 4', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'D'),
'Q5' => array('content'=>'Content of question5', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q6' => array('content'=>'Content of question 6', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'C'),
'Q7' => array('content'=>'Content of question 7', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q8' => array('content'=>'Content of question 8', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q9' => array('content'=>'Content of question 9', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q10' => array('content'=>'Content of question 10', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q11' => array('content'=>'Content of question 11', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q12' => array('content'=>'Content of question 12', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q13' => array('content'=>'Content of question 13', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q14' => array('content'=>'Content of question 14', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q15' => array('content'=>'Content of question 15', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q16' => array('content'=>'Content of question 16', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q17' => array('content'=>'Content of question 17', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q18' => array('content'=>'Content of question 18', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q19' => array('content'=>'Content of question 19', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q20' => array('content'=>'Content of question 20', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q21' => array('content'=>'Content of question 21', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q22' => array('content'=>'Content of question 22', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q23' => array('content'=>'Content of question 23', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q24' => array('content'=>'Content of question 24', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'Q25' => array('content'=>'Content of question 25', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
 )
?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<title>quiz app</title>
	<style type="text/css">
		.quiz{
			width: 700px;
			margin-left:400px;
			padding: 15px;
			border: 2px solid grey;
			border-radius: 10px;
        }
		.qus{
			text-align: left;
			margin-left: 130px;
			background-color: #669966;
			color: white;
			width: 500px;
			border-radius: 2px;
		
		}
		.key{
			text-align: center;
			font-size: 1.1em;
			border-radius: 2px;
			background-color: #CCCCFF;
			width: 200px;
		}
		.chs{
			margin-left: 170px;
		}
		.next{
			font-size: 1em;
			height: 30px;
			width: 60px;
			background-color: lightyellow;
			 box-shadow: 2px 2px grey;
			 border-radius: 5px;
	
		}
		.next a{
			text-decoration: none;
		}

	</style>
	<h1 align="center">Quiz</h1>
</head>
<body>
<form class="quiz" action="page2_w2.php" method="_GET">
		<?php foreach ($question as $key => $value){ ?>
		
		<h3 class="qus">Question: <?php echo $value['content'] ?></h3> 
				<input class="chs" type="radio" /><label name="q1" id="q1a"> </label><?php echo $value['a'] ?>
				<input class="chs" type="radio" /><label name="q1" id="q1b"> </label><?php echo $value['b'] ?>
				<input class="chs" type="radio"/><label name="q1" id="q1c"> </label><?php echo $value['c'] ?>
				<input class="chs" type="radio"/><label name="q1" id="q1d"> </label><?php echo $value['d'] ?>
				
		<?php } ?>
</form>
    <h3 align="center"><button class="next" ><a href="page2_w2.php">Next</a></button></h3>
</body>
</html>