<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<body>
    <h1>Registration Form</h1>
    <form action="../Control/tasktwo.php" method="post">
        <table>
            <tr>
                <td>First Name : <input type= "text" name ="fname" placeholder =" Enter First Name">  <br></td>
            </tr>

            <tr>
                <td>Last Name : <input type ="text" name ="lname" placeholder = "Enter Last Name"><br></td>
            </tr>

            <tr>
                 <td>Age : <input type ="text" name ="age" placeholder = "Enter Your Age"><br></td>
            </tr>

            <tr>
                <td>
                    Designation : <input type = "radio" name = "designation1" value ="juniorprogrammer">Junior Programmer
                    <input type = "radio" name = "designation2" value ="seniorprogrammer">Senior Programmer
                    <input type = "radio" name = "designation3" value ="projectlead">Project Lead <br>
                </td>
            </tr>

            <tr>
                <td>
                    Preferred Language : <name="PreferredLanguage">            
                    <input type="checkbox" name="PreferredLanguage1"> JAVA
                    <input type="checkbox" name="PreferredLanguage2"> PHP
                    <input type="checkbox" name="PreferredLanguage3"> C++
                </td>
            </tr>

            <tr>
                <td>Email : <input type ="email" name = "email" placeholder = "Enter Your Email" autocomplete ="on"></td>
            </tr>

            <tr>
                <td>Password : <input type ="password" name ="pass" placeholder = "Enter Valid Password"><br></td>
            </tr>

            <tr>
                <td>Please choose a file<input type="file"><br></td>
            </tr>

            <tr>
                <td>
                    <input type ="submit"  value="submit">
                    <input type = "reset">
                </td>
            </tr>
        </table>
</body>

</html>