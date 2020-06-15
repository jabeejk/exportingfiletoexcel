<?php

	if(isset($_POST['btn']))
	{	
		include_once 'db.php';
		header("Content-Type: text/csv; charset=utf-8");
		header("Content-Disposition: attachment; filename = download.csv");

		$output = fopen("php://output","w");

		fputcsv($output, array());

		$query = "select * from surveyform";

		$fire = mysqli_query($con,$query);
		while($row = mysqli_fetch_assoc($fire))
		{	
			fputcsv($output, $row );
		}
		fclose($output);
	}
?>