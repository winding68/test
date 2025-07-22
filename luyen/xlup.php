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

    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    echo $id, $name;
    $sql = "UPDATE users set name = '$name', pass = '$pass' where id = '$id'";
    $check = Mysqli_query($conn, $sql);
    header('location: user.php');
    ?>
</body>
</html>