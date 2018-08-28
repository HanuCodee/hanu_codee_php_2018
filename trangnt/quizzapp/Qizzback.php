<?php
$questions = array(
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
);
?>

<?php $correct_answer = array(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Qizz Key</title>
	<meta charset="UTF-8">
	<style>
		th{
			background: lightblue;
		}
		table, th,tr,td{
			border-collapse: collapse;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
			padding: 15px;
			text-align:center;
		}
	</style>
</head>
<body>

<form>
	<table>
		<tr>
			<th>Number</th>
			<th>Content</th>
			<th>A</th>
			<th>B</th>
			<th>C</th>
			<th>D</th>
			<th>Correct Answer</th>
			<th>Set Up</th>
			<?php foreach($questions as $k=>$v){ ?>
		</tr>
		<tr>
			<td> <?php echo $k?></td>
			<td><?php echo $v['content'] ?></td>
			<td><?php echo $v['a'] ?></td>
			<td><?php echo $v['b'] ?></td>
			<td><?php echo $v['c'] ?></td>
			<td><?php echo $v['d'] ?></td>
			<td><?php echo $v['correct'] ?></td>
			<td><div action="" method="GET"><input type="button" name="dl" value="Delete"></div>
			    <div action="" method="GET" ><input type="button" name="rs" value="Reset"></div>
			</td>

		</tr>
		   <?php 
		   array_push($correct_answer, $v['correct']);
		   $length = count($correct_answer);
		   for($i = 0; $i < length; $i++){
		   	 echo $correct_answer[$i];
		   }
		    } 
		   ?>
	</table>
	
</form>

</body>
</html>