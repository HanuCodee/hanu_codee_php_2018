<?php
$questions = array(
	"question1" => array("content" => "Why does it rain?",
	                  "answer1" => "This is from a song", 
                      "answer2" => "Is this copy lyrics?", 
                      "answer3" => "I dont know", 
                      "answer4" => "Only scientists know",
                      "rightans" => "C"), 
	"question2" => array("content" => "Why does it hurt?",
                      "answer1" => "I know your feeling", 
                      "answer2" => "Im out of answer", 
                      "answer3" => "Well, I have a fragile heart", 
                      "answer4" => "Only loosing money makes it hurt",
                      "rightans" => "D"), 
    "question3" => array("content" => "Please god explain",
                      "answer1" => "Oh another copy lyrics", 
                      "answer2" => "god cannot explain cause he is on vacation now", 
                      "answer3" => "Do I know this song?", 
                      "answer4" => "Ok, so who is the singer?",
                      "rightans" => "A"), 
    "question4" => array("content" => "Cause I dont understand",
                       "answer1" => "Me too", 
                      "answer2" => "Why? What?", 
                      "answer3" => "Humh, this is hard", 
                      "answer4" => "Ask the person next to you",
                      "rightans" => "A"),
    "question4" => array("content" => "Love is goodbye",
                       "answer1" => "Ok bye", 
                      "answer2" => "Why? What?", 
                      "answer3" => "Humh, this is hard", 
                      "answer4" => "Can we say hello again?",
                      "rightans" => "D"),
    "question5" => array("content" => "Now I just cry",
                       "answer1" => "Cry baby", 
                      "answer2" => "Now I know who the singer is", 
                      "answer3" => "I know", 
                      "answer4" => "Stop",
                      "rightans" => "B"),
    "question6" => array("content" => "Please tell me why",
                       "answer1" => "Oh my baby", 
                      "answer2" => "Im trying to guess the next thing in lyrics", 
                      "answer3" => "Humh, is the song end yet?", 
                      "answer4" => "You are a music lover",
                      "rightans" => "D"),
    "question7" => array("content" => "Ooh my babe",
                       "answer1" => "I knew it", 
                      "answer2" => "I was right", 
                      "answer3" => "Ahaa same for me", 
                      "answer4" => "What about the next question?",
                      "rightans" => "D"),
); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>quiz app</title>
	<h1 style="text-align: center; font-family: sans-serif; color: #5c00e6; text-transform: uppercase;"> questions page 2</h1>
</head>
<style type="text/css">
	.quiz{
		width: 750px;
		height: auto;
		background-color: lightblue;
		border-radius: 15px;
		padding: 25px;
		margin:0 auto;

	}
	.answer{
		background-color: #ccfff5;
		margin-top: 5px;
		margin-bottom: 5px;
		margin-left: 15px;
        width: 90%;
        border-radius: 15px; 

	}
	.ques li {
		padding: 5px;
		font-weight: bold;
		margin-top: 5px;
	}
	.nextpage{
		background-color: red;
		border: solid white 2px;
		padding: 7px;
		margin-right:40%;
	}
	.nextpage a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
	}
	.prepage{
		background-color: red;
		border: solid white 2px;
		padding: 7px;
		margin-left:45%;
	}
	.prepage a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
	}
</style> 
<body>
	<ol type="1" class="ques">
		<form class="quiz" method="post">
		<li>Question : <?php echo $questions['question1']['content'] ?> <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon1"><?php echo $questions['question1']['answer1'] ?></li>
		<li><input type="radio" name="chon1"><?php echo $questions['question1']['answer2'] ?></li>
		<li><input type="radio" name="chon1"><?php echo $questions['question1']['answer3'] ?></li>
		<li><input type="radio" name="chon1"><?php echo $questions['question1']['answer4'] ?></li>
		</ol>
	
	
		<li>Question : <?php echo $questions['question2']['content'] ?><br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon2"><?php echo $questions['question2']['answer1'] ?></li>
		<li><input type="radio" name="chon2"><?php echo $questions['question2']['answer2'] ?></li>
		<li><input type="radio" name="chon2"><?php echo $questions['question2']['answer3'] ?></li>
		<li><input type="radio" name="chon2"><?php echo $questions['question2']['answer4'] ?></li>
		</ol>
	
		<li>Question : <?php echo $questions['question3']['content'] ?><br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon3"><?php echo $questions['question3']['answer1'] ?></li>
		<li><input type="radio" name="chon3"><?php echo $questions['question3']['answer2'] ?></li>
		<li><input type="radio" name="chon3"><?php echo $questions['question3']['answer3'] ?></li>
		<li><input type="radio" name="chon3"><?php echo $questions['question3']['answer4'] ?></li>
		</ol>
	
		<li>Question : <?php echo $questions['question4']['content'] ?> <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon4"><?php echo $questions['question4']['answer1'] ?></li>
		<li><input type="radio" name="chon4"><?php echo $questions['question4']['answer2'] ?></li>
		<li><input type="radio" name="chon4"><?php echo $questions['question4']['answer3'] ?></li>
		<li><input type="radio" name="chon4"><?php echo $questions['question4']['answer4'] ?></li>
		</ol>
	
		<li>Question : <?php echo $questions['question5']['content'] ?><br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon5"><?php echo $questions['question5']['answer1'] ?></li>
		<li><input type="radio" name="chon5"><?php echo $questions['question5']['answer2'] ?></li>
		<li><input type="radio" name="chon5"><?php echo $questions['question5']['answer3'] ?></li>
		<li><input type="radio" name="chon5"><?php echo $questions['question5']['answer4'] ?></li>
		</ol>
	
		<li>Question : <?php echo $questions['question6']['content'] ?><br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon6"><?php echo $questions['question6']['answer1'] ?></li>
		<li><input type="radio" name="chon6"><?php echo $questions['question6']['answer2'] ?></li>
		<li><input type="radio" name="chon6"><?php echo $questions['question6']['answer3'] ?></li>
		<li><input type="radio" name="chon6"><?php echo $questions['question6']['answer4'] ?></li>
		</ol>
	
		<li>Question : <?php echo $questions['question7']['content'] ?><br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon7"><?php echo $questions['question7']['answer1'] ?></li>
		<li><input type="radio" name="chon7"><?php echo $questions['question7']['answer2'] ?></li>
		<li><input type="radio" name="chon7"><?php echo $questions['question7']['answer3'] ?></li>
		<li><input type="radio" name="chon7"><?php echo $questions['question7']['answer4'] ?></li>
		</ol>
	

		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon8"><?php echo $questions['question7']['answer1'] ?></li>
		<li><input type="radio" name="chon8"><?php echo $questions['question7']['answer2'] ?></li>
		<li><input type="radio" name="chon8"><?php echo $questions['question7']['answer3'] ?></li>
		<li><input type="radio" name="chon8"><?php echo $questions['question7']['answer4'] ?></li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon9">milk</li>
		<li><input type="radio" name="chon9">tea</li>
		<li><input type="radio" name="chon9">bread</li>
		<li><input type="radio" name="chon9">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon10">milk</li>
		<li><input type="radio" name="chon10">tea</li>
		<li><input type="radio" name="chon10">bread</li>
		<li><input type="radio" name="chon10">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<select name="ques11">
		<ol type="A" class="answer">
		<li><option>milk</option></li>
		<li><option>milk</option></li>
		<li><option>tea</option></li>
		</ol>
		</select>
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<select name="ques12">
		<ol type="A" class="answer">
		<li><option>milk</option></li>
		<li><option>milk</option></li>
		<li><option>tea</option></li>
		</ol>
		</select>
	</form>
	</ol>
	<button class="prepage"><a href="ex3w2.php">prev page</a></button>
	<button class="nextpage"><a href="p3.php">next page</a></button>
</body>
</html>