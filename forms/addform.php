<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h1>Add Subject</h1>
    <a href="../index.php">Home</a>
    <br/><br/>

    <form action="../functions/add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Subject Code</td>
                <td><input type="text" name="code"></td>
            </tr>

            <tr>
                <td>Subject Name</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>  
</body>
</html>