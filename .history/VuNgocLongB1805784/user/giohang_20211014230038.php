
<div class="all-cart">
    <h2>Giỏ Hàng</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Hình Ảnh</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Thao tác</th>
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
                            <td>
                                <form action="./process_giohang.php?mshhXoa='.$item_giohang['msx'].'" method="POST">
                                    <input class="btn btn-secondary btn-lg" name="Xoahh" type="submit" value="Xóa">
                                    <br>
                                    <input class="btn btn-secondary btn-lg" style="margin-top: 20px;" name="tang" type="submit" value="Tăng">
                                    <br>
                                    <input class="btn btn-secondary btn-lg" style="margin-top: 20px;" name="giam" type="submit" value="Giảm">
                                </form>
                            </td>
                        </tr>';
                        $i++;
                    }
                    echo '
                        </tbody>
                        <tr>
                            <td colspan="6">Tổng tiền : '.$tongtien.' VND</td>
                            <td>
                                <form action="./process_giohang.php" method="POST">
                                    <input class="btn btn-secondary btn-sm" name="XoaTC" type="submit" value="Xóa Tất Cả">
                                </form>
                            </td>
                        </tr>
                    ';
                }
            ?>

    </table>
    <?php
        $k= FALSE;
        if (isset($_SESSION['username_dangnhap'])){
            $k= TRUE;
        }
        echo '<a href="index.php?action=thanhtoan" class="btn btn-secondary btn-lg" style="margin: 50px 500px;" onmouseover="CheckDN('.$k.')">Thanh Toán</a>';
    ?>
</div>