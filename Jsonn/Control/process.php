<?php
$name = "";
if(isset($_POST['submit']))
{
	$firstName = $_REQUEST['firstName'];
	if(empty($firstName))
	{
		$name = "Please Enter Your First Name";
	}
}
	$fordata = array
	(
		'firstName' => $_POST["firstName"],
		'lastName' => $_POST["lastName"],
		'email'  => $_POST["email"],
		'mobile' => $_POST["mobile"]
	);

	$existingdata = file_get_contents("../Data/data.json");
	$tempJSONdata = json_decode($existingdata);
	$tempJSONdata[] = $fordata;

	$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

	if(file_put_contents("../Data/data.json", $jsondata))
	{
		echo "Data Successfully saved <br>";
	}
	else
	{
		echo "No data Saved";
	}
?>