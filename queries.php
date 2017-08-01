<?php 
require('connect.php');

if(isset($_POST['submit_level'])){

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