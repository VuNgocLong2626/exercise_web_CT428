<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php" style="color: #000000; text-decoration: none;"><h1>ADMIN</h1></a>
    </header>
    <div style="width: 40%; margin: 100px auto; background-color: #f1f1f1;">
        <form action='' method='POST'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="sdt" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password1">
            </div>
            <button type="submit" class="btn btn-secondary">Đăng nhập</button>
        </form>
    </div>
    <script src="./js/event.js"></script>
</body>
</html>