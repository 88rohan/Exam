<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="c.css">
    <title>C Programming</title>
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
		<a class="active">&nbsp C &nbsp </a>
		<a href="cpp.php">C++</a>
		<a href="java.php">Java</a>
		<a id="A" href="login.php">Login</a><a id="A" href="register.php">Register</a>
	</div>
	<div id="content">
		<div id="div1">
			<a href="C.php">Intro</a>
			<a href="c_history.php">History</a>
		</div>
		<div id="div2">
		<table style="margin-left: 1.5em;float:right" border>
			<caption>Timeline of language development</caption>
				<tbody>
				<tr>
					<th>Year</th>
					<th>C Standard</th></tr>
				<tr>
					<td>1972</td>
					<td>Birth</td></tr>
				<tr>
					<td>1978</td>
					<td>K&amp;R C</td></tr>
				<tr>
					<td>1989/1990</td>
					<td>ANSI C and ISO C</td></tr>
				<tr>
					<td>1999</td>
					<td>C99</td></tr>
				<tr>
					<td>2011</td>
					<td>C11</td></tr>
				<tr>
					<td>2017/2018</td>
					<td>C18</td></tr>
			</tbody>
		</table>
		</div>
		<div id="div3">
		<!--demo for flex-->
			asdfgesrtytuiophgkjl;
		</div>
</body>
</html>