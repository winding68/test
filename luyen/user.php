<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.scss">
    <title>Document</title>
</head>
<body>
    <?php
    include('connect.php');
    $sql = 'select * from users ';
    $user = Mysqli_query($conn, $sql);
    ?>
     <table>
    <?php
    while($row = mysqli_fetch_array($user)){
    ?>
    
        <tr>
            <td> <?php echo $row['name'] ?></td>
            <td> <?php echo $row['pass'] ?></td>
            <td> <?php echo $row['group'] ?></td>
            <td>
                <button ><a href="http://localhost/luyen/update.php?id=<?php echo $row['id'];?>">Sửa</a>  </button> 
               <button><a href = "http://localhost/luyen/update.php?id=<?php echo $row['id'];?>">xóa</a></button>
            </td>
        </tr>
   
 
   <?php } ?> 
 </table>
</body>
</html>