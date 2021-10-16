<?php
    echo 'Xac nhan';
?>

<div style="width: 95%; margin: 50px auto; ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã Số Hóa Đơn</th>
                <th scope="col">MSKH</th>
                <th scope="col">MSNV</th>
                <th scope="col">Ngày Đặt Hàng</th>
                <th scope="col">Ngày Giao Hàng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Xử lý</th>
            </tr>   
        </thead>
        <tbody>

<?php
    $result = $conn->query("SELECT * FROM nhanvien");
    $i=1;
    while($row = $result->fetch_assoc()){
        $MSNV = $row["MSNV"];
        $HoTenNV = $row["HoTenNV"];
        $ChucVu = $row["ChucVu"];
        $SoDienThoai = $row["SoDienThoai"];
        echo '<tr>
                <th scope="col">' .$MSNV. '</th>
                <th scope="col">' .$HoTenNV. '</th>
                <th scope="col">' .$ChucVu. '</th>
                <th scope="col">' .$SoDienThoai. '</th>
                <th scope="col">
                <a class="btn btn-secondary btn-size-s" href="process/process_quanlynhansu.php?msnsXoa=' .$MSNV. '">Xóa</a>
                <button onclick=getAllNS(\'' .$MSNV. '\',\'' .$HoTenNV. '\',\'' .$ChucVu . '\',\''.$SoDienThoai.'\') class="btn btn-secondary btn-size-s">Sửa</button>
                </th>
            <tr>';
            $i++;
    }
    echo"</tbody>
    </table>
</div>";
?>