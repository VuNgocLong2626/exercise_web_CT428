
<div class="from-detail"  style="width: 70%;">
    <div class="row" style="margin-bottom: 50px;">
        <?php
            $result = $conn->query("SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH JOIN loaihanghoa lh ON lh.MaLoaiHang = hh.MaLoaiHang WHERE hh.MSHH='".$_GET['mshh']."'");
            $row = $result->fetch_assoc();
            echo '
                <div class="col-4">
                    <img src="../admin/uploads/'.$row["TenHinh"].'" alt="" style="height: 400px;width: 330px; border-radius: 50px 0 0 50px">
                </div>
                <div class="col-8">
                    <h4 style="font-weight: bold;margin-top: 15px;">' .$row["TenHH"]. '</h4>
                    <h5>Thể loại : ' .$row["TenLoaiHang"]. '</h5>
                    <h6>Giá : <b>' .$row["Gia"]. ' VNĐ</b></h6>
                    <h6>Số Lượng: <b>' .$row["SoLuongHang"]. '</b></h6>
                    <p style="font-size: 18px;">' .$row["QuyCach"]. '</p>
                    <form action="./process_giohang.php?mshh='.$_GET['mshh'].'" method="POST">
                        <input class="btn btn-secondary btn-lg" style="margin: 0px 0px 20px 200px;" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                    </form>
                </div>';
        ?>
    </div>
</div>