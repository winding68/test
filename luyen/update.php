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
    $sql = "select * from users where id = '$id'";
    $check = Mysqli_query($conn, $sql);

    ?>
    <form action = "xlup.php" method = "POST">
          <?php
           while($row = mysqli_fetch_array($check)){
            ?> 
          <input hidden type="text" name="id" value = <?php echo $row['id']?>>
          <label for="email">tên</label>
          <input type="text" name="name" value = <?php echo $row['name']?>>
          <label for="pass">mật khẩu</label>
          <input type="text" name="pass"  value = <?php echo $row['pass']?>>
          <input type="submit" value = 'sửa'>
          <?php }?>
         
    </form>
</body>
</html>