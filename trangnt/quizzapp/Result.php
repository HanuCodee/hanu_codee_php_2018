<!DOCTYPE html>
<html>
<head>
	<title>Qizz Result</title>
	<style>
	body{
		background-image: url(https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/-hc9b5b/clouds-movement-time-lapse-blue-sky-4k-video_43ryivsdl__F0000.png)
	}
	
	fieldset{
		/*text-align: center;*/
		padding: 100px 100px;
		border: 3px ridge yellow;
		background-color: white;
		margin: 300px;
	}
	textarea{
		border-style: ridge;
		border-color: yellow;
		border-width: 6px;
	}
	input{
		text-align: center;
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
	<form action="Ex1a.php" method="GET">
	<fieldset>
	<legend style="color: brown"><h1 style="color: orange"><i>Result</i></h1></legend>
		<p>
			<strong> Correct Answers:</strong>
		</p>
		<hr>
		<p>
			<strong>Message:...</strong>
		</p>
	</fieldset>
	<div style="text-align: center">
	<input type="submit" value="Back to Qizz">
   </div>
</form>
<hr>
<textarea placeholder="Enter comment here..." rows="10" cols="100"></textarea> 
<input type="submit" value="Post">

</body>
</html>
