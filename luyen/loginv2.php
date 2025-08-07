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
    $Tk = $_POST['name'];
    $Pass = $_POST['pass'];
    echo $Pass;
     $sql = "SELECT * FROM users WHERE name = '$Tk' AND pass = '$Pass'";
    $check = mysqli_query($conn, $sql);
    if($check){
        if(mysqli_num_rows($check) > 0){
            while($row = mysqli_fetch_array($check)){
            //     if()
            // }
            if($row['group'] === 1){
                echo "user";
            }
            else{
                echo "admin";
            };
        };
        }
        else{
            echo "tài khoản hoặc mật khẩu sai";
        };
    }
    ?>
</body>
</html>