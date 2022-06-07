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

	$data_array[] = $fordata;

	$new_data = json_encode($data_array);

	if(file_put_contents('..//Data/data.json', $new_data))
	{
		echo "Data Ssaved Successfully";
	}
	else
	{
		echo "No Data Saved";
	}
}
?>