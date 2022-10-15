<?php
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		
		
		$csvfile = "./userdata.csv";
		$filename = fopen($csvfile, "a");
		$formdata = array($name, $email, $dob, $gender, $country);
		fputcsv($filename,$formdata);
		
		print_r($formdata);
		fclose($filename);
	}else{
		echo "No data";
	}
?>