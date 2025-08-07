<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $_server = 'localhost';
       $_user   = 'root';
       $_pass = '';
       $_data = 'testter';
       $conn = Mysqli_connect($_server, $_user, $_pass, $_data);
       if($conn){
        echo "success ";
       }
       else{
        echo"lỗi";
       }
    ?>
</body>
</html>