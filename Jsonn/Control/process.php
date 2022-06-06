<?php
$formdata = array(
    'firstname' => $_POST["firstname"],
    'lastname' => $_POST["lastname"],
    'email' => $_POST["email"],
    'password' => $_POST["password"]
);

$existingdata = file_get_contents('../Data/data.json');

$tempJSONdara = json_decode($existingdata);
$tempJSONdara[] = $formdata;
$jsondata = json_encode($existingdata, JSON_PRETTY_PRINT);

if (file_put_contents("../Data/data.json", $jsondata)) {
    echo "Data Successfully Saved <br>";
} else {
    echo "no data saved";
}
$str_data = file_get_contents("../Data/data.json");
$data = json_decode($str_data, true);
foreach ($data as $mydata) {
    foreach ($mydata as $key => $value) {
        echo $key . " is " . $value . "<br>";
    }
}
?>