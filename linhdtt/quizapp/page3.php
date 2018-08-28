<?php
	session_start();
	var_dump($_SESSION);
	var_dump($_POST);
	$key=array("A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D",
				"A","C","B","D","A","C","D","B","C","D");
	include "header.php";
?>
<p class="noti"><?php
$count = 0;
for($i=1;$i<51;$i++){
	if ($_SESSION['question'.$i]==$key[$i-1]) {
		$count++;
	}
}
if ($count < 5){
	echo 'You got '.$count.'of 50. You are so so so lazy';
}
if (5 <= $count && $count< 20){
	echo 'You got '.$count.'of 50. You need more revisions!';
}
if (20 <= $count && $count< 30){
	echo 'You got '.$count.'of 50. You get a medium result!';
}
if (30 <= $count && $count< 40){
	echo 'You got '.$count.'of 50. Rather good!';
}
if ($count >=40){
	echo 'You got '.$count.' of 50.Wow! Fantastic!';
}
?></p>
<br><a href="page1.php"><input type="button" class="btn" value="Try again?"></a>
<?php
	include "footer.php"
?>