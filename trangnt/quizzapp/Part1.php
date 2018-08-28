
<?php
session_start();
$questions1 = array(
'1' => array('content'=>'Noi dung cau 1', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'A'),
'2' => array('content'=>'Noi dung cau 2', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'3' => array('content'=>'Noi dung cau 3', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'4' => array('content'=>'Noi dung cau 4', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'5' => array('content'=>'Noi dung cau 5', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'6' => array('content'=>'Noi dung cau 6', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'7' => array('content'=>'Noi dung cau 7', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'8' => array('content'=>'Noi dung cau 8', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'9' => array('content'=>'Noi dung cau 9', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'10' => array('content'=>'Noi dung cau 10', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'11' => array('content'=>'Noi dung cau 11', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'12' => array('content'=>'Noi dung cau 12', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'13' => array('content'=>'Noi dung cau 13', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'14' => array('content'=>'Noi dung cau 14', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
'15' => array('content'=>'Noi dung cau 15', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D','correct'=>'B'),
)
?>
<?php
$user_answer = array();
if(isset($_GET['']))
?>
<!DOCTYPE html>
<html>
<head>
	<title>Qizz p1</title>
	<meta charset="UTF-8">
	<style>
	form{}
	fieldset{
		/*text-align: center;*/
		padding: 100px 100px;
		border: 3px ridge yellow;
		background-color: lightskyblue;
		margin: 200px;
	}
	p{
		text-align: center;
	}
	body{
		background-image: url(https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/-hc9b5b/clouds-movement-time-lapse-blue-sky-4k-video_43ryivsdl__F0000.png)
		/*background-repeat: no-repeat;*/
		
	}
	
	ul{
		list-style-type: none;
		padding: 0px;
		margin:0px;
		background-color:gold;
		/*width :100%;
		height:60px;*/
		overflow:hidden;
		
	}
	li a{
		display:block;
		text-decoration:none;
		text-align:center;
		font-family:sans-serif;
		color:black;
		padding: 16px 90px;

	}
	li{
		float: left;
	}
	li a:hover{
		background-color: yellow;
	}
	li a:active{
		color: lightblue;
	}
	.menu{
		position: fixed; 
		top: 0px; 
		/*width: 1000vw;*/
		width:100%;
		display: block;
	}
	.bt{
		text-align:center;
	}

	</style>
    
</head>
<body>
	<!--tao danh sach cau hoi-->
	<div class="menu">
		<ul>
			<li><a href="#home">HOME</a></li>
			<li><a href="#qizz">QIZZ</a></li>
			<li><a href="#test">TEST</a></li>
			<li><a href="#tips">TIPS</a></li>
			<li><a href="#library">LIBRARY</a></li>
			<li><a href="#about">ABOUT</a></li>
		</ul>
	</div>
	<form action="Part2.php" method="GET">
	<fieldset>
		<legend><i><h1 style="color: yellow">Part 1:</h1></i></legend>
	<ol type="number">
		<?php foreach ($questions1 as $k => $v){ ?>
		
		<li>Question:</li><?php echo $v['content'] ?><br>
			<p>
				<label for="qa"> <input type="radio" name="q" id="qa" value="answerA"><?php echo $v['a'] ?></label><br>
				<label for="qb"><input type="radio" name="q" id="qb" value="answerB"><?php echo $v['b'] ?></label><br>
				<label for="qc"><input type="radio" name="q" id="qc" value="answerC"><?php echo $v['c'] ?></label><br>
				<label for="qd"><input type="radio" name="q" id="qd" value="answerD"><?php echo $v['d'] ?></label><br>
				<label for="q"><input type="hidden" value=""><br>
			</p>

		<?php 
		// echo $_GET['q'];
		array_push($user_answer, $_GET['q']);
	} ?>
		</ol>
	</fieldset>
	<div class="bt">
		<input style="background:orange; width: 100px; height: 30px;" type="submit" name="part1" value="CONTINUE">
	</div>
	</form>
 <?php

 ?>
</body>
</html>
<!--IBM
dữ liệu mảng, mỗi một câu hỏi sẽ là một mảng gồm: content, answer a,b,c,d và corect answer 
cookie , hidden feild
liên quan đến SAD, SEG-->