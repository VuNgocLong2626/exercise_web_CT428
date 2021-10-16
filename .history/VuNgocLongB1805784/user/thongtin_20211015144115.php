<div class="all-cart">
    <h2>Thông tin cá nhân</h2>
    <?php
        $result = $conn->query("SELECT * FROM khachhang kh JOIN diachikh dc ON kh.MSKH = dc.MSKH WHERE kh.MSKH = ".$_SESSION['MSKH']."");
        $row = $result->fetch_assoc();
        echo '
        <form name="thongtincanhan" method="post" action="">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Mã số khách hàng</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="mskh" name="mskh" value="'.$row['MSKH'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Họ và tên</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="Hten" name="Hten" value="'.$row['HoTenKH'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Tên công ty</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="cty" name="cty" value="'.$row['TenCongTy'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Telephone</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="telephone" name="telephone" value="'.$row['SoDienThoai'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Số Fax</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="sofax" name="sofax" value="'.$row['SoFax'].'">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Địa chỉ</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="diachi" rows="5" name="diachi" style="resize:none;width:100%;">'.$row['DiaChi'].'</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary btn-lg" style="margin: 50px 500px;" name="capnhat" id="capnhat" onmouseover="checkDiaChi()">Cập nhật</button>
        </form>
        ';
    ?>
    <h2>Lịch sử mua hàng</h2>
</div>