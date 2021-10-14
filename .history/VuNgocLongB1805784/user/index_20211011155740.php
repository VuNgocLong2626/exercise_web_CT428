<?php 
	include "../admin/process/mysql_connect.php"; 
    session_start();
    // $_SESSION['username'] = "Long";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/test.css">
    <title>Trang chủ</title>
</head>
<body>
    <div class="main-contens">
        <div class="header">
            <a href="#"><img src="./image/logo120.png" alt="hinh logo" style="margin-left: 40px;"></a>
            <div class="from-individual">
                <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Giỏ Hàng</a>
                <?php 
                    if (!isset($_SESSION['username'])){
                        echo '<a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Login</a>
                            <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Register</a>';
                    }
                    else{
                        echo 'adsdasd';
                    }
                ?>
            </div>
        </div>
        <div class="baner" >
            <img src="./image/4-2.png" alt="">
        </div>
        <div class="selling-products">
            <div class="title">Sản phẩm Bán chạy nhất</div>
            <div class="information-hot">
                <div class="selling">
                    <div class="row row-style">
                        <div class="col-5">
                            <img src="./image/TT1.jpg" alt="" style="height: 320px;">
                        </div>
                        <div class="col-7">
                            <h5 class="title-hot">Nếu anh truyền thuyết của em</h5>
                            <div class="content-hot">
                                <p>không hề có chuyện ai có lỗi với ai, chỉ lấy 1234567891011121314 người này không biết trân t
                                    rọng người kia mà thôi. Nếu Đáng tiếc không phải anh là khúc nhạc cho tuổi thanh xuân với mối tình đầu sâu sắc, 
                                    Gặp anh là điều bất ngờ tuyệt vời nhất là mối tình của cặp đôi oan gia từ game ra đến đời    </p>
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm btn-hot">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
                <div class="selling">
                    <div class="row row-style">
                        <div class="col-5">
                            <img src="./image/TT1.jpg" alt="" style="height: 320px;">
                        </div>
                        <div class="col-7">
                            <h5 class="title-hot">Nếu anh truyền thuyết của em</h5>
                            <div class="content-hot">
                                <p>không hề có chuyện ai có lỗi với ai, chỉ lấy 1234567891011121314 người này không biết trân t
                                    rọng người kia mà thôi. Nếu Đáng tiếc không phải anh là khúc nhạc cho tuổi thanh xuân với mối tình đầu sâu sắc, 
                                    Gặp anh là điều bất ngờ tuyệt vời nhất là mối tình của cặp đôi oan gia từ game ra đến đời    </p>
                            </div>
                            <button type="button" class="btn btn-secondary btn-sm btn-hot">Thêm vào giỏ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-products">
            <nav>
                <a href="" class="btn btn-outline-secondary" style="margin: auto 15px;padding-top: 12px;">Tất cả sách</a>
                <?php 
                $result = $conn->query("SELECT * FROM loaihanghoa");
                $i=1;
                while($row = $result->fetch_assoc()){
                    echo '<a href="" class="btn btn-outline-secondary" style="margin: auto 15px;padding-top: 12px;">'.$row["TenLoaiHang"].'</a>';
                }
                ?>
            </nav>
            <div class="products">
                <?php 
                
                ?>
                <div class="books">
                    <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                        <div>
                            <img src="./image/TT1.jpg" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                        </div>
                        <div class="card-body" style="font-size: 13px;">
                            <h6 class="card-title">Nếu anh là truyền thuyết của em</h6>
                            <p>190.000 vnđ</p>
                            <div style="display: flex;">
                                <a href="#" class="btn btn-secondary btn-sm" style="margin-right: 10px;padding: 0px;width: 200px;">Chi tiết sản phẩm</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="width: 200px;">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books">
                    <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                        <div>
                            <img src="./image/TT1.jpg" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                        </div>
                        <div class="card-body" style="font-size: 13px;">
                            <h6 class="card-title">Nếu anh là truyền thuyết của em</h6>
                            <p>190.000 vnđ</p>
                            <div style="display: flex;">
                                <a href="#" class="btn btn-secondary btn-sm" style="margin-right: 10px;padding: 0px;width: 200px;">Chi tiết sản phẩm</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="width: 200px;">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books">
                    <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                        <div>
                            <img src="./image/TT1.jpg" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                        </div>
                        <div class="card-body" style="font-size: 13px;">
                            <h6 class="card-title">Nếu anh là truyền thuyết của em</h6>
                            <p>190.000 vnđ</p>
                            <div style="display: flex;">
                                <a href="#" class="btn btn-secondary btn-sm" style="margin-right: 10px;padding: 0px;width: 200px;">Chi tiết sản phẩm</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="width: 200px;">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books">
                    <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                        <div>
                            <img src="./image/TT1.jpg" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                        </div>
                        <div class="card-body" style="font-size: 13px;">
                            <h6 class="card-title">Nếu anh là truyền thuyết của em</h6>
                            <p>190.000 vnđ</p>
                            <div style="display: flex;">
                                <a href="#" class="btn btn-secondary btn-sm" style="margin-right: 10px;padding: 0px;width: 200px;">Chi tiết sản phẩm</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="width: 200px;">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books">
                    <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                        <div>
                            <img src="./image/TT1.jpg" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                        </div>
                        <div class="card-body" style="font-size: 13px;">
                            <h6 class="card-title">Nếu anh là truyền thuyết của em</h6>
                            <p>190.000 vnđ</p>
                            <div style="display: flex;">
                                <a href="#" class="btn btn-secondary btn-sm" style="margin-right: 10px;padding: 0px;width: 200px;">Chi tiết sản phẩm</a>
                                <a href="#" class="btn btn-secondary btn-sm" style="width: 200px;">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="books">1</div>
                <div class="books">1</div>
                <div class="books">1</div>
                <div class="books">1</div>
                <div class="books">1</div>
                <div class="books">1</div>
                <div class="books">1</div>
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