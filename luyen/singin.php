<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   include('connect.php');
   $name = $_POST['name'];
   $id = $_POST['id'];
   $pass = $_POST['pass'];
   $sql = "INSERT INTO users (`group`,`name`,`pass`) VALUES ('$id','$name','$pass')";
   $check = Mysqli_query($conn,$sql);  
   header('location: user.php');
   ?>
</body>
</html>