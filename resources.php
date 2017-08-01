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

		   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

		   <div>
		      <label for="level">
		      	<span class="required">Level *</span> 
		      	<select id="level" tabindex="4" value="level" name="level">
		      		 <option value="default">choose a level</option>     
			         <option value="freshman">freshman</option>
			         <option value="sophomore">sophomore</option>
			    </select>
		      </label> 
			</div>

			<div>		           
		      <button name="submit_level" type="submit" id="get_level">SELECT</button> 
			</div>
			</form>

			<?php if(isset($_POST['submit_level'])){

	$level = $_POST['level'];

	echo "<h3>Please choose one of the ".$level." courses</h3>";

	$query = "SELECT course FROM ".$level."";

	$result = mysqli_query($connection,$query);

	if(!$result)
	{
		echo "there is a problem with your request, check your query";
	}
	else
	{
	
	$numr = mysqli_num_rows($result); 

	if($numr == 0){
	echo "<script type=\"text/javascript\">
	alert('no entry found')</script>";
	}
	else{
		echo"<form method='post' action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>";
			echo"<div>";
		      echo"<label for='course'>";
		      	echo"<span class='required'>Course *</span>" ;
		      	echo"<select id='course' name='course' tabindex='4'>";   
			         echo"<option value='course'>Choose a course</option>";
		while($line = mysqli_fetch_array($result))
		{			
			    echo"<option>".$line['course']."</option>";
		}

		echo "</select>
		      </label> 
			</div>

			<div>		           
		      <button name='get' type='submit' id='get' >GET THE COURSE</button> 
			</div>
			<div>		           
		      <button name='add' type='submit' id='add' >ADD A COURSE</button> 
			</div>
		   </form>";


}
	}

}

	?>
<?php

	if(isset($_POST['get'])){

 		$course = $_POST['course'];

 	$query="SELECT link FROM freshman WHERE course='".$course."' UNION SELECT link FROM Sophomore WHERE course='".$course."'" ;

	$result = mysqli_query($connection,$query);

	if(!$result)
	{
		echo "there is a problem with your request, check your query";
	}
	else
	{
	
	$nbmod=mysqli_num_rows($result); 

	if($nbmod==0){
	echo "<script type=\"text/javascript\">
	alert('no entry found')</script>";
	}
	else{
		echo"<h3>Below is the google drive link to your ".$course."</h3>";
		echo"<h3>Feel free to add links to freshman/sophomore courses.</h3>";
		echo"<h3 style='color:red'>Please keep in mind that any attempts to add a link to a non-ethical video is a moral violation and will be followed by serious a punishment.</h3>";
		while($line=mysqli_fetch_array($result)){
		{
		
		echo "<button type='submit'><a href='".$line['link']."'>DOWNLOAD YOUR COURSE</a></button></br>";
		}
	}
	}
	}
}

	?>
	<form action='resources.php'>
	<div>		           
		<button type="submit">REFRESH</button> 
	</div> 
	</form>

	<form method="post" action="add_course.php">
	<div>		           
		<button name="add" type="submit" id="add">ADD COURSE</button> 
	</div>
	</form>
</div>
</div>

<div id="block3">
			<div id="base2">
			<span id="Copyright">Copyright © 2017-2018  team Rawiya</span>
			<img src="images\base2.png">
			</div>
			<div id="base">
				<img src="images\basee.png">
				<img src="images\logo2.png" id="logo2">
			</div>
		</div>
</body>
</html>