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
        <a href="index.php" class="btn btn-outline-secondary" style="margin: auto 15px;padding-top: 12px;">Tất cả sách</a>
        <?php 
        $result = $conn->query("SELECT * FROM loaihanghoa");
        $i=1;
        while($row = $result->fetch_assoc()){
            echo '<a href="index.php?mlh='.$row["MaLoaiHang"].'" class="btn btn-outline-secondary" style="margin: auto 15px;padding-top: 12px;">'.$row["TenLoaiHang"].'</a>';
        }
        ?>
    </nav>
    <div class="products">
        <?php 
            $sql = "SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH";
            if(isset($_GET['mlh'])){
                $sql = "SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH WHERE hh.MaLoaiHang = '".$_GET['mlh']."'";
            }
            $result = $conn->query($sql);
            $i=1;
            while($row = $result->fetch_assoc()){
                echo '<div class="books">
                        <form action="./process_giohang.php?mshh='.$row["MSHH"].'" method="POST">
                            <div class="card" style="width: 100%; border: none; background-color: #f1f1f1;">
                                <div>
                                    <img src="../admin/uploads/'.$row["TenHinh"].'" alt="..." style="height: 250px;width: 80%;margin-left: 30px; margin-top: 10px;">
                                </div>
                                <div class="card-body" style="font-size: 13px;">
                                    <h6 class="card-title">' .$row["TenHH"]. '</h6>
                                    <p>' .$row["Gia"]. ' VNĐ</p>
                                    <div style="display: flex;">
                                        <a href="index.php?action=chitieyhanghoa&mshh=' .$row["MSHH"]. '" class="btn btn-secondary btn-sm" style="margin-right: 10px; padding: 8px 0px;width: 200px;">Chi tiết sách</a>
                                        <input class="btn btn-secondary btn-sm" style="width: 200px;" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>';
            }
        ?>
    </div>
</div>