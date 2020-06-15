<?php

	$con = mysqli_connect('localhost','root','','student');


	$query = "SELECT * FROM surveyform";
	$fire = mysqli_query($con,$query);

	

?>