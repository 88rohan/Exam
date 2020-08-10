<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="c.css">
    <title>C++ Programming</title>
</head>
<body>
	<div id="header">
		
		<h2><?php
			if(@$_GET['UserName']==true)
			{?>
				Hi!
			<?php
				echo $_GET['UserName'];
			}
			?></h2>
		<h1 id="portal"><u>EXAM&nbsp PORTAL</u></h1>
	</div>
	<div class="menu">
		<a href="index.php">Home</a>
		<a href="C.php">&nbsp C &nbsp </a>
		<a class="active">C++</a>
		<a href="java.php">Java</a>
		<a id="A" href="login.php">Login</a><a id="A" href="register.php">Register</a>
	</div>
	<div id="content">
	<!--demo for flex-->
		<div>dfddgf</div>
		<div>asdfg</div>
	</div>
</body>
</html>