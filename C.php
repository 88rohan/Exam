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
				<p id="name">C (programming language)</p>
				<p>
					C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, 
					with a static type system. By design, C provides constructs that map efficiently to typical machine instructions. It has found lasting 
					use in applications previously coded in assembly language. Such applications include operating systems and various application software 
					for computer architectures that range from supercomputers to PLCs and embedded systems.</p>
				<p>
					A successor to the programming language B, C was originally developed at Bell Labs by Dennis Ritchie between 1972 and 1973 to 
					construct utilities running on Unix. It was applied to re-implementing the kernel of the Unix operating system. During the 1980s, C 
					gradually gained popularity. It has become one of the most widely used programming languages, with C compilers from various vendors 
					available for the majority of existing computer architectures and operating systems. C has been standardized by the ANSI since 1989 
					(ANSI C) and by the International Organization for Standardization (ISO).</p>
				<p>
					C is an imperative procedural language. It was designed to be compiled to provide low-level access to memory and language 
					constructs that map efficiently to machine instructions, all with minimal runtime support. Despite its low-level capabilities, 
					the language was designed to encourage cross-platform programming. A standards-compliant C program written with portability in 
					mind can be compiled for a wide variety of computer platforms and operating systems with few changes to its source code.</p>
		</div>
		<div id="div3">
		<!--demo for flex-->
			asdfgesrtytuiophgkjl;
		</div>
	</div>
</body>
</html>