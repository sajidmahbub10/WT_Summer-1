<?php
    include('../Control/process.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="POST">
        <label>First Name: </label> <br>
        <input type="text" name="firstName">
        <br><br>

        <label>Last Name: </label> <br>
        <input type="text" name="lastName">
        <br><br>

        <label>Email: </label> <br>
        <input type="text" name="email">
        <br><br>

        <label>Mobile: </label> <br>
        <input type="text" name="mobile">
        <br><br>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>