<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <?php
    include_once("../database/connection.php");

    if(isset($_POST['Submit'])){
        $code = $_POST['code'];
        $name = $_POST['name'];

        if(empty($code) || empty($name)){
            if(empty($code)){
                echo "<font color='red'>Subject Code field is empty.</font><br>";

            }
            if(empty($name)){
                echo "<font color='red'>Subject Name field is empty.</font><br>";

            }

            echo "<br/> <a href='javascript:self.history.back();'>Go Back</a>";
        }
        else{
            $result = mysqli_query($dbc, "INSERT INTO tblsubjects(subject_code, subject_name) VALUES('$code','$name')");
            echo "<font color='green'>Data added successfully.</font>";
            echo "<br/> <a href='../index.php'> View Result </a>";
        }
    }
    ?>
    
</body>
</html>