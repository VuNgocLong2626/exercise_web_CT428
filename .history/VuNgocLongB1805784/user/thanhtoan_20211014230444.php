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
</div>