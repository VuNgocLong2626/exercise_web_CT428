<div class="baner" >
    <img src="./image/4-2.png" alt="">
</div>

<div class="selling-products">
    <div class="title">Sản phẩm Bán chạy nhất</div>
        <div class="information-hot">
        <?php
        $sql = "SELECT sum(Soluong),Mshh from chitietdathang group by MSHH  order by sum(soluong) desc limit 2";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $sql1 = "SELECT * FROM HANGHOA hh JOIN HinhHangHoa hhh ON hh.MSHH = hhh.MSHH WHERE  hh.MSHH='" . $row["Mshh"] . "' ;";
            $result1 = $conn->query($sql1);
            $row1 = $result1->fetch_assoc();
            echo ' <div class="selling">
                    <div class="row row-style">
                        <div class="col-5">
                            <img src="../admin/uploads/' . $row1["TenHinh"] . '" alt="" style="height: 320px;max-width:100%">
                        </div>
                        <div class="col-7">
                            <h5 style="text-align:center" class="title-hot">' . $row1["TenHH"] . '</h5>
                            <div class="content-hot">
                                <p style="
                                padding:0px;
                                margin:0px;
                                margin-left:0px;
                                width: 350px;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                line-height: 20px;
                                -webkit-line-clamp: 9;
                                display: -webkit-box;
                                -webkit-box-orient: vertical;">' . $row1["QuyCach"] . '</p>
                            </div>      
                            <form action="./process_giohang.php?mshh=' . $row1["MSHH"] . '" method="POST">
                            <input class="btn btn-secondary btn-sm btn-hot" name="themgiohang" type="submit" value="Thêm giỏ hàng">
                            </form>
                        </div>
                    </div>
                </div>
            ';
        }

        ?>
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
            $sql = "SELECT * FROM hanghoa hh JOIN hinhhanghoa hmh ON hh.MSHH = hmh.MSHH";
            if(isset($_GET['mlh'])){
                $sql = "SELECT * FROM hanghoa hh JOIN hinhhanghoa hmh ON hh.MSHH = hmh.MSHH WHERE hh.MaLoaiHang = '".$_GET['mlh']."'";
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