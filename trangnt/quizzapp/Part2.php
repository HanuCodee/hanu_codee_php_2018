<?php
session_start();

$questions2 = array(
'16' => array('content'=>'Noi dung cau hoi 16', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'17' => array('content'=>'Noi dung cau hoi 17', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'18' => array('content'=>'Noi dung cau hoi 18', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'19' => array('content'=>'Noi dung cau hoi 19', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'20' => array('content'=>'Noi dung cau hoi 20', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'21' => array('content'=>'Noi dung cau hoi 21', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'22' => array('content'=>'Noi dung cau hoi 22', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'23' => array('content'=>'Noi dung cau hoi 23', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'24' => array('content'=>'Noi dung cau hoi 24', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'25' => array('content'=>'Noi dung cau hoi 25', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'26' => array('content'=>'Noi dung cau hoi 26', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'27' => array('content'=>'Noi dung cau hoi 27', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'28' => array('content'=>'Noi dung cau hoi 28', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'29' => array('content'=>'Noi dung cau hoi 29', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
'30' => array('content'=>'Noi dung cau hoi 30', 'a'=>'Answer A', 'b'=>'Answer B', 'c'=>'Answer C', 'd'=>'Answer D', 'correct'=>'A'),
)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Qizz p2</title>
	<meta charset="UTF-8">
	<style>
	
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
		lightblue;
	}
	.menu{
		position: fixed; 
		top: 0px; 
		width: 100%;
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
	<form action="Result.php" method="GET">
	<fieldset>
		<legend><i><h1 style="color: yellow">Part 2:</h1></i></legend>
		<?php foreach($questions2 as $k=>$v){ ?>
		
		<?php echo $k .": "?><?php echo $v['content'] ?><br>
			<p>
				<input type="radio" name="que2" id="a"><?php echo $v['a'] ?><br>
				<input type="radio" name="que2" id="b"><?php echo $v['b'] ?><br>
				<input type="radio" name="que2" id="c"><?php echo $v['c'] ?><br>
				<input type="radio" name="que2" id="d"><?php echo $v['d'] ?><br>
				
			</p>
		<?php } 
		for($i=0; $i<$k; $i++){
			if(isset($_GET['que2'.$k])){
			array_push($user_answer,$_GET['que2'.$k]);
			}
		} ?>
		
	</fieldset>
	<div <style="text-align:center">
		
	</style>>
		<input style="background: orange; width: 100px; height: 30px;" type="submit" name="part2" value="RESULT">
	<br>
	<form action="Part1.php" method="GET">
		<input style="background: orange; width: 150px; height: 30px;" type="submit" value="BACK TO PART 1">
	</form>
	</div>
 <?php

 ?>
</body>
</html>