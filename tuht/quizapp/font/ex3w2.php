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
	<h1 style="text-align: center; font-family: sans-serif;color: #5c00e6; text-transform: uppercase;"> quiz questions</h1>
</head>
<style type="text/css">
	.quiz{
		width: 800px;
		height: auto;
		background-color: lightblue;
		border-radius: 15px;
		padding: 25px;
		margin: 0 auto;
	}
	.answer{
		background-color: #ccfff5;
		margin-top: 5px;
		margin-bottom: 5px;
		margin-left: 15px;
        width: 90%;
        border-radius: 15px;
        padding-bottom: 20px; 
    
	}
	.ques li {
		padding: 5px;
		font-weight: bold;
		margin-top: 5px;
	}
	.nextpage{
		background-color: red;
		border: none;
		padding: 7px;
		margin-left: 50%;
	}
	.nextpage a{
	    color: white;
	    text-transform: uppercase;
	    text-decoration: none;
	}
</style> 
<body>
	<ol type="1" class="ques">
		<form class="quiz" method="post">
		 <?php foreach ($questions as $key => $value) {
			$nd = $value['content']; ?> 
			<li>Question: <?php echo $nd.'<br>'; ?><br></li>
			<?php 
			   $cautrl1 = $value['answer1'];
			   $cautrl2 = $value["answer2"];
			   $cautrl3 = $value["answer3"]; 
			   $cautrl4 = $value["answer4"]; 
			   ?>
			   Your answer :
    <ol type="A" class="answer"> <br>
		<li><input type="radio" name="chon1"><?php echo $cautrl1 ?></li>
		<li><input type="radio" name="chon1"><?php echo $cautrl2 ?></li>
		<li><input type="radio" name="chon1"><?php echo $cautrl3 ?></li>
		<li><input type="radio" name="chon1"><?php echo $cautrl4 ?></li>
		</ol>
		<?php } ?>
	</form>
	</ol>
	<button class="nextpage"><a href="p2.php">next page</a></button>
</body>
</html>