<?php
    include "../admin/process/mysql_connect.php"; 
    session_start();
    $MSHH = $_GET['mshh'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/test.css">
    <title>Chi Tiết Sản Phẩm</title>
</head>
<body>
    <div class="main-contens">
        <div class="header">
            <a href="#"><img src="./image/logo120.png" alt="hinh logo" style="margin-left: 40px;"></a>
            <div class="from-individual">
                <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Giỏ Hàng</a>
                <?php 
                    if (isset($_SESSION['username_dangnhap'])){
                        echo '<a href="./process/process_dangnhap_dangxuat.php?process=1" class="btn btn-outline-secondary" style="margin-right: 20px; ">Logout</a>';
                        echo $_SESSION['username_dangnhap'];
                    }
                    else{
                        echo '<a href="./process/process_dangnhap_dangxuat.php?process=0" class="btn btn-outline-secondary" style="margin-right: 20px; ">Login</a>
                            <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Register</a>';
                    }
                ?>
            </div>
        </div>
        
        <div class="from-detail">
            <div class="row">
                <?php
                    $result = $conn->query("SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH WHERE hh.MSHH=".$_GET['mshh'];."");
                    $i=1;
                    $row = $result->fetch_assoc()
                    echo '<div class="col-4">
                                <img src="../admin/uploads/'.$row["TenHinh"].'" alt="" style="height: 400px; border-radius: 50px 0 0 50px">
                            </div>
                            <div class="col-8">
                                <h4 style="font-weight: bold;margin-top: 15px;">' .$row["TenHH"]. '</h4>
                                <h5>Thể loại : ' .$row["TenHH"]. '</h5>
                                <h6>Giá : <b>' .$row["TenHH"]. '</b></h6>
                                <p style="font-size: 18px;">không hề có chuyện ai có lỗi với ai, chỉ lấy 1234567891011121314 người này kh
                                    ông biết trân t rọng người kia mà thôi. Nếu Đáng tiếc không phải anh là khúc nhạc cho tuổi thanh xuân vớ
                                    i mối tình đầu sâu sắc, Gặp anh là điều bất ngờ tuyệt vời nhất là mối tình của cặp đôi oan gia từ game ra đến đời
                                </p>
                                <a href="#" class="btn btn-secondary btn-lg" style="margin-left: 150px;">Thêm vào giỏ</a>
                            </div>
                        </div>';

                ?>
            </div>
        </div>

        <footer>
            <h3 style="font-weight: bold;">About me</h3>
            <div class=>
                <div>Vũ Ngọc Long - B1805784
                    <br>
                    Đồ án Lập trình web - CT428 Nhóm 03
                </div>
                <ul style="list-style: none; display: flex;">
                    <li><a href="#" target="_blank"><img src="./image/fb.png" alt="Github icon" style="width: 40px;height: 40px; border-radius: 200px;"></a></li>
                    <li><a href="#" target="_blank"><img src="./image/github.png" alt="Linked icon" style="width: 40px;height: 40px; border-radius: 200px;"></a></li>
                </ul>
                <div>
                    Copyright © 2021 Vũ Ngọc Long
                </div>
            </div>
        </footer>
    </div>
</body>
</html>