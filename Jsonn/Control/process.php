<?php

$formdata = array(
    'firstname' => $_POST["firstname"],
    'lastname' => $_POST["lastname"],
    'email' => $_POST["email"],
    'password' => $_POST["pass"]
);

$existingdata = file_get_contents('../Data/data.json');

$tempJSONdara = json_decode($existingdata);
$tempJSONdara[] =$formdata;
$jsondata = json_encode($existingdata, JSON_PRETTY_PRINT);

if(file_put_contents("../Data/data.json", $jsondata))
{
    echo "Data Successfully Saved <br>";
}
else
{
    echo "no data saved";
}
?>