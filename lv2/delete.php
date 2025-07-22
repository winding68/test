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
    $id = $_GET['id'];
    $sql = "delete from users where id = '$id'";
    $check = Mysqli_query($conn,$sql);
    ?>
</body>
</html>