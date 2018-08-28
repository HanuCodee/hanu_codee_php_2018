<!DOCTYPE html>
<html>
<head>
	<title>quiz app</title>
	<h1 style="text-align: center; font-family: sans-serif; color: #5c00e6; text-transform: uppercase;"> questions page 3</h1>
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
		margin-left:650px;
		width: 100px;
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
		margin-left:650px; 
		width: 100px;
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
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon1"checked>milk</li>
		<li><input type="radio" name="chon1">tea</li>
		<li><input type="radio" name="chon1">bread</li>
		<li><input type="radio" name="chon1">wine</li>
		</ol>
	
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon2">milk</li>
		<li><input type="radio" name="chon2">tea</li>
		<li><input type="radio" name="chon2">bread</li>
		<li><input type="radio" name="chon2">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon3">milk</li>
		<li><input type="radio" name="chon3">tea</li>
		<li><input type="radio" name="chon3">bread</li>
		<li><input type="radio" name="chon3">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon4">milk</li>
		<li><input type="radio" name="chon4">tea</li>
		<li><input type="radio" name="chon4">bread</li>
		<li><input type="radio" name="chon4">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon5">milk</li>
		<li><input type="radio" name="chon5">tea</li>
		<li><input type="radio" name="chon5">bread</li>
		<li><input type="radio" name="chon5">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon6">milk</li>
		<li><input type="radio" name="chon6">tea</li>
		<li><input type="radio" name="chon6">bread</li>
		<li><input type="radio" name="chon6">wine</li>
		</ol>
	
		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon7">milk</li>
		<li><input type="radio" name="chon7">tea</li>
		<li><input type="radio" name="chon7">bread</li>
		<li><input type="radio" name="chon7">wine</li>
		</ol>
	

		<li>Question : what do I want to eat now? <br></li>
		Your answer : <br>
		<ol type="A" class="answer">
		<li><input type="radio" name="chon8">milk</li>
		<li><input type="radio" name="chon8">tea</li>
		<li><input type="radio" name="chon8">bread</li>
		<li><input type="radio" name="chon8">wine</li>
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
	<button class="nextpage"><a href="result.php">submit</a></button>
	<button class="prepage"><a href="p2.php">prev page</a></button>
</body>
</html>