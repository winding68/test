<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signin.php" method = "post">
        <input hidden type="text" name = "group" value = "1">
        <label for="name">Tên</label>
        <input type="text" name = "name" require>
        <label for="pass">Mật khẩu</label>
        <input type="text" name="pass" require>
        <input type="submit" value = "submit">
    </form>
</body>
</html>