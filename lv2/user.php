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
     session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $username = $_SESSION['username'];
    $user_group = $_SESSION['user_group'];

    echo "<h1>Chào mừng, " . htmlspecialchars($username) . "!</h1>";
    echo "<p>Bạn thuộc nhóm: " . htmlspecialchars($user_group) . "</p>";
    if ($user_group == 1) {
        echo "<p>Đây là nội dung dành cho quản trị viên.</p>";
    } else {
        echo "<p>Đây là nội dung dành cho người dùng thông thường.</p>";
    }
    echo '<p><a href="logout.php">Đăng xuất</a></p>'; // Liên kết đăng xuất
};
     $sql = "select * from users";
     $check = Mysqli_query($conn,$sql);
     ?>
     <table>
          <tr>
        <td>
            tên
        </td>
        <td>
            mật khẩu
        </td>
        <td>
            group
        </td>
        <td>
           Hành động
        </td>
     </tr>
          <?php
     while($row=Mysqli_fetch_array($check)){
    ?> 
     <tr>
        <td>
           <?php echo $row['name']?>
        </td>
        <td>
               <?php echo $row['pass']?>
        </td>
        <td>
               <?php echo $row['group']?>
        </td>
        <td>
            <button><a href="http://localhost/lv2/formup.php?id=<?php echo $row['id']; ?>">sửa</a></button>
             <button><a href="http://localhost/lv2/delete.php?id=<?php echo $row['id']; ?>">xóa</a></button>
        </td>
     </tr>
    <?php }; ?>
     </table>
   
    
   
</body>
</html>