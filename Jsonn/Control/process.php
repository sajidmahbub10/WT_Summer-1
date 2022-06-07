<?php

if(isset($_POST['submit']))
{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	$data = file_get_contents('../Data/data.json');
	$data_array = json_decode($data, true);

	$fordata = array(
		'firstName' => $_POST["firstName"],
		'lastName' => $_POST["lastName"],
		'email'  => $_POST["email"],
		'mobile' => $_POST["mobile"]
	);

	
}
?>