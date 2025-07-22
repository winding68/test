<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $server = 'localhost';
      $user = 'root';
      $pass = '';
      $data = 'testter';
      
      $conn = Mysqli_connect($server,$user,$pass,$data);
      if(!$conn){
        echo "unsuccess";
      }
     
    ?>
</body>
</html>