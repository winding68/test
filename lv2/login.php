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
    $sql = "select * from users where name = '$name' and pass = '$pass'";
    if($name !== '' && $pass !== ''){
           $check = Mysqli_query($conn,$sql);
       if(Mysqli_num_rows($check) > 0){
         while($row = Mysqli_fetch_array($check)){
         // echo $row['name'], $row['group'];
             $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['name'];
        $_SESSION['user_group'] = $row['group'];
          if($row['group'] == 1){
              header('location: home.html');
            }
          else{        
             header('location: user.php');
           };
           } 
        }
        else{
        echo "thông tin đăng nhập sai";
        }
    }
    else{
        echo 'bạn cần nhập đầy đủ thông tin tao test lần 2';
    }
 
    ?>
</body>
</html>