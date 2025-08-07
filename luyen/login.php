<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý Đăng nhập</title>
</head>
<body>
    <?php
    include('connect.php');
    $TK = $_POST['email'];
    $Pass = $_POST['pass']; 
    $sql = "SELECT * FROM users WHERE email = '$TK' AND pass = '$Pass'";
    $check = mysqli_query($conn, $sql);
    if ($check) {
        if (mysqli_num_rows($check) > 0) {
            while ($row = mysqli_fetch_array($check)) {
                echo "Đăng nhập thành công cho tài khoản: " . $row['email'];
            }
        } else {
            echo "Email hoặc mật khẩu không đúng.";
        }
    } else {
        echo "Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>