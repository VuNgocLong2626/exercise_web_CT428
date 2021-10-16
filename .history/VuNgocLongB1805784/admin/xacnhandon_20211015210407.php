
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
    $result = $conn->query("SELECT * FROM dathang WHERE TrangThai = 'Chưa xử lý';");
    $i=1;
    while($row = $result->fetch_assoc()){
        echo '
        <form name="quanlyloai" method="post" action="process/process_xacnhandon.php">
            <tr>
                <th scope="col">'.$row["SoDonDH"].'</th>
                <th scope="col">'.$row["MSKH"].'</th>
                <th scope="col">'.$row["MSNV"].'</th>
                <th scope="col">'.$row["NgayDH"].'</th>
                <th scope="col">'.$row["NgayGH"].'</th>
                <th scope="col">'.$row["TrangThai"].'</th>
                <th scope="col">
                <button class="btn btn-secondary btn-size-s">Sửa</button>
                <button class="btn btn-secondary btn-size-s">Sửa</button>
                </th>
            </tr>
        </form>
        ';
    }
    echo"</tbody>
    </table>
</div>";
?>