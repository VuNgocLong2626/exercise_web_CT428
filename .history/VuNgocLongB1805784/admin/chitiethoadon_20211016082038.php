<div style="width: 95%; margin: 50px auto; ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã hàng hóa</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá Đặt Hàng</th>
                <th scope="col">Giảm giá</th>
            </tr>   
        </thead>
        <tbody>

<?php
    $result = $conn->query("SELECT * FROM chitietdathang WHERE SoDonDH=".echo $_GET['masohd']."");
    while($row = $result->fetch_assoc()){
        echo '
            <tr>
                <th scope="col" name="sohd">'.$row["MSHH"].'</th>
                <th scope="col">'.$row["SoLuong"].'</th>
                <th scope="col">'.$row["GiaDatHang"].'</th>
                <th scope="col">'.$row["GiamGia"].'</th>
            </tr>
        ';
    }
    echo"</tbody>
    </table>
</div>";
?>
