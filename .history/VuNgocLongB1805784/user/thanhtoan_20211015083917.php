<div class="all-cart">
    <h2>Tổng Sản Phẩm</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['giohang'])){
                    $i=1;
                    $tongtien=0;
                    foreach($_SESSION['giohang'] as $item_giohang){
                        $tongtien += $item_giohang['tientong'];
                        echo '
                        <tr>
                            <th scope="row">'.$i.'</th>
                            <td><img src="../admin/uploads/'.$item_giohang['TenHinh'].'" style="height: 200px;" alt=""></td>
                            <td>'.$item_giohang['tensach'].'</td>
                            <td>'.$item_giohang['giasach'].'</td>
                            <td>'.$item_giohang['soluong'].'</td>
                            <td>'.$item_giohang['tientong'].'</td>
                        </tr>';
                        $i++;
                    }
                    echo '
                        </tbody>
                        <tr>
                            <td >Tổng tiền : '.$tongtien.' VND</td>
                        </tr>
                    ';
                }
            ?>
    </table>
    <?php
        $result = $conn->query("SELECT * FROM khachhang kh JOIN diachikh dc ON kh.MSKH = dc.MSKH WHERE kh.MSKH = ".$_SESSION['MSKH']."");
        $row = $result->fetch_assoc();
        echo '
        <h2 style="margin-top: 50px;">Thông tin</h2>
        <form name="xacnhandathang" method="post" action="">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Họ và tên</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="Hten" name="Hten" value="'.$row['HoTenKH'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Telephone</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="telephone" name="telephone" value="'.$row['SoDienThoai'].'">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="diachi" rows="5" name="diachi" style="resize:none;width:100%;">'.$row['DiaChi'].'</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg" style="margin: 50px 500px;" name="xacnhan" id="xacnhan" onmouseover="checkDiaChi()">Xác nhận đặt hàng</button>
        </form>
        ';
    ?>

</div>