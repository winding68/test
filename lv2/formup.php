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
      $sql = "select name,pass from users where id = '$id'";
      $check = Mysqli_query($conn, $sql);
     
    ?>
       <?php  while($row = Mysqli_fetch_array($check)){ ?>
    <form action="xlup.php" method = "post">
       <input hidden type="text" name = "id" value = "<?php echo $id; ?>" require>
     
        <label for="name">Tên</label>
        <input type="text" name = "name" value = "<?php echo $row['name']; ?>" require>
        <label for="pass">Mật khẩu</label>
        <input type="text" name="pass" value = "<?php echo $row['pass']; ?>" require>
        <input type="submit" value = "submit">
    </form>
 <?php };?>
</body>
</html>