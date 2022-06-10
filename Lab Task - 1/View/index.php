<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task - 1</title>
</head>

<body>
    <form action="../Control/taskone.php" method="post">
        <table>
            <tr>
                <th><label for="num1">1st Number:</label></th>
                <th><input type="text" name="num1"></th>
            </tr>

            <tr>
                <th><label for="num2">2nd Number:</label></th>
                <th><input type="text" name="num2"><br></th>
            </tr>

            <tr>
                <th>Sum:</th>
                <th><input type="radio" name="func" value="+">
                    <label for="func">plus</label>
                </th>

                <th><input type="radio" name="func" value="-">
                    <label for="func">minus</label>
                </th>

                <th><input type="radio" name="func" value="*">
                    <label for="func">multiplication</label>
                </th>

                <th><input type="radio" name="func" value="/">
                    <label for="func">dividation</label>
                </th>
            </tr>

            <tr>
                <th><input type="submit" name="submit"></th>
            </tr>

        </table>
    </form>
</body>
</html>