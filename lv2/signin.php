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
    $pass = $_POST['pass'];
    $group = $_POST['group'];
    if($name !== '' && $pass !== '' && $group !== ''){
        $sql = "INSERT INTO users (`name`,`pass`,`group`) VALUES ('$name','$pass','$group')";
         $check = Mysqli_query($conn, $sql);
    }
    else{
        echo "không có";
    }
    Mysqli_close($conn);
    header('location: home.html');
    ?>
</body>
</html>