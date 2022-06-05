<?php
$namerr = "";
if (isset($_POST['submit'])) {
    $fname = $_REQUEST['FirstName'];
    if (empty($fname)) {
        $namerr = "Please Enter Your First Name";
    } else {
        echo 'Your First Name is ' . $fname;
    }
    echo '<br>';

    $lname = $_REQUEST['LastName'];
    if (empty($lname)) {
        echo 'Please Enter Your Last Name';
    } else {
        echo 'Your Last Name is ' . $lname;
    }

    echo '<br>';

    $age = $_REQUEST['Age'];

    if ($age == '') {
        echo 'Please Enter Your Age ';
    } else {
        echo 'Your Age is ' . $age;
    }

    echo '<br>';

    if (isset($_POST['Desgination1']) || isset($_POST['Desgination2']) || isset($_POST['Desgination3'])) {
        if (isset($_POST['Desgination1'])) {
            echo 'You Have Been Selected As Junior Programmer ';
            echo '<br>';
        }
        if (isset($_POST['Desgination2'])) {
            echo 'You Have Been Selected As Senior Programmer';
            echo '<br>';
        }
        if (isset($_POST['Desgination3'])) {
            echo 'You Have been Selected As Project Lead';
            echo '<br>';
        }
    } else {
        echo 'You Have not selected For Anything';
    }

    echo '<br>';


    if (isset($_POST['PreferredLanguage1']) || isset($_POST['PreferredLanguage2']) || isset($_POST['PreferredLanguage3'])) {
        if (isset($_POST['PreferredLanguage1'])) {
            echo 'You Have Selected JAVA ';
            echo '<br>';
        } else if (isset($_POST['PreferredLanguage2'])) {
            echo 'You Have Selected PHP';
            echo '<br>';
        } else if (isset($_POST['PreferredLanguage3'])) {
            echo 'You Have Selected C++';
            echo '<br>';
        }
    } else {
        echo 'You Have not Clicked a checkbox';
        echo '<br>';
    }

    $email = $_POST['Email'];
    if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)) {
        echo 'Invalid Email';
        echo '<br>';
    } else {
        echo 'Your Email Address is ' . $email . '<br>';
    }

    $password = $_REQUEST['Password'];
    if (strlen($password) < 8) {
        echo 'Enter a Valid password';
    } else {
        echo 'Password is Valid <br>';
    }
}