<?php

if(isset($_POST['submit']))
{
    $firstname = $_REQUEST['firstname'];
    if(empty($firstname))
    {
        echo "Please enter first name";
    }
    else
    {
        echo "Your first name is" . $firstname;
    }
    echo '<br>';

    $lastname = $_REQUEST['lastname'];
    if(empty($lastname))
    {
        echo 'Please Enter Your Last Name';
    }
    else
    {
        echo 'Your Last Name is ' . $lastname;
    }

    $email = $_POST['email'];
    if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)) 
    {
        echo 'Invalid Email';
        echo '<br>';
    } 
    else 
    {
        echo 'Your Email Address is ' . $email . '<br>';
    }

    $password = $_REQUEST['password'];
    if (strlen($password) < 8) {
        echo 'Enter a Valid password';
    } else {
        echo 'Password is Valid <br>';
    }
}

$formdata = array(
    'firstname' => $_POST["firstname"],
    'lastname' => $_POST["lastname"],
    'email' => $_POST["email"],
    'password' => $_POST["pass"]
);

$existingdata = file_get_contents('../Data/data.json');

$tempJSONdara = json_decode($existingdata);
$tempJSONdara[] = $formdata;
$jsondata = json_encode($existingdata, JSON_PRETTY_PRINT);

if (file_put_contents("data.json", $jsondata)) {
    echo "Data Successfully Saved <br>";
} else {
    echo "no data saved";
}
?>