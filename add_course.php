<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="resources.css">
	<?php require('connect.php') ?>
</head>
<body>
<div>
<div id="plan">
		<div id="nav">
				<ul id="logo"><img src="images\logo.png"></ul>
				<ul id="home"><a href="index.php">HOME</a></ul>
				<ul id="abouttbs"><a href="about.html">ABOUT TBS</a></ul>
				<ul id="resources"><a href="resources.php">RESOURCES</a></ul>
				<ul id="contact"><a href="contact.html">CONTACT</a></ul>
		</div>
		<div>
			<div id="bg"></div>
		</div>

		<div id="text1">
			<div id="contact-form">
	<div>
		<h1>Welcom to TBS resouces!</h1> 
	</div>

	<?php if(isset($_POST['add'])){
		echo"<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>";
			echo"<div>";
		      echo"<label for='level'>";
		      	echo"<span class='required'>Targeted level *</span>" ;
		      	echo"<input id='t_level' type='text' name='t_level' tabindex='4'>";
		      	echo"</label>"; 
		      echo"<label for='course'>";
		      	echo"<span class='required'>Course to add *</span>" ;
		      	echo"<input id='course' type='text' name='t_course' tabindex='4'>";
		      	echo"</label>"; 
		      echo"<label for='link'>";
		      	echo"<span class='required'>LINK *</span>" ;
		      	echo"<input id='link' type='text' name='t_link' tabindex='4'>";
		      	echo"</label>";   		    	
			echo"</div></br>
			<div>		           
		      <button name='c_add' type='submit' id='add' >ADD</button> 
			</div>";
		}
	 ?>
	</form>

	<?php
	if(isset($_POST['c_add'])){
 		$t_level= $_POST['t_level'];
 		$t_course= $_POST['t_course'];
 		$t_link= $_POST['t_link'];

	 		$request="INSERT INTO ".$t_level." VALUES ('".$t_course."','".$t_link."');";
	 		$result=mysqli_query($connection,$request);
	 		echo "course added succefully";
	 	 }
 ?>
 <form action='add_course.php'>
	<div>		           
		<button type="submit">REFRESH</button> 
	</div> 
</form>
<form action='resources.php'>
	<div>		           
		<button type="submit">GET BACK</button> 
	</div> 
</form>
</div>
</div>

<div id="block3">
			<div id="base2">
			<span id="Copyright">Copyright © 2017-2018  team MS. Abdelmoula</span>
			<img src="images\base2.png">
			</div>
			<div id="base">
				<img src="images\basee.png">
				<img src="images\logo2.png" id="logo2">
			</div>
		</div>
</body>
</html>