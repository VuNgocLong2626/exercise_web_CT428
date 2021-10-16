
<div style="width: 95%; margin: 50px auto; ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã Số Hóa Đơn</th>
                <th scope="col">MSKH</th>
                <th scope="col">MSNV</th>
                <th scope="col">Ngày Đặt Hàng</th>
                <th scope="col">Ngày Giao Hàng</th>
                <th scope="col">Dia Chỉ</th>
                <th scope="col" style="width: 300px;">Trạng thái</th>
                <th scope="col">Xử lý</th>
            </tr>   
        </thead>
        <tbody>

<?php
    $result = $conn->query("SELECT * FROM dathang WHERE TrangThai = 'Chưa xử lý';");
    while($row = $result->fetch_assoc()){
        echo '
        <form name="quanlyloai" method="post" action="process/process_xacnhandon.php?sohd='.$row["SoDonDH"].'">
            <tr>
                <th scope="col" name="sohd">'.$row["SoDonDH"].'</th>
                <th scope="col">'.$row["MSKH"].'</th>
                <th scope="col">'.$row["MSNV"].'</th>
                <th scope="col">'.$row["NgayDH"].'</th>
                <th scope="col">'.$row["NgayGH"].'</th>
                <th scope="col" style="width: 300px;">'.$row["DiaChiGiao"].'</th>
                <th scope="col" style="width: 50px;">'.$row["TrangThai"].'</th>
                <th scope="col" style="width: 200px;">
                    <button class="btn btn-secondary" style="display: block;" name="dangxl">Đang xử lý</button>
                    <button class="btn btn-secondary" style="display: block;margin-top: 5px;"name="daht">Đã Hoàn Thành</button>
                    <button class="btn btn-secondary" style="display: block;margin-top: 5px;">Sửa</button>
                </th>
            </tr>
        </form>
        ';
    }

    $result = $conn->query("SELECT * FROM dathang WHERE TrangThai != 'Chưa xử lý';");
    while($row = $result->fetch_assoc()){
        echo '
        <form name="quanlyloai" method="post" action="process/process_xacnhandon.php?sohd='.$row["SoDonDH"].'">
            <tr>
                <th scope="col" name="sohd">'.$row["SoDonDH"].'</th>
                <th scope="col">'.$row["MSKH"].'</th>
                <th scope="col">'.$row["MSNV"].'</th>
                <th scope="col">'.$row["NgayDH"].'</th>
                <th scope="col">'.$row["NgayGH"].'</th>
                <th scope="col" style="width: 300px;">'.$row["DiaChiGiao"].'</th>
                <th scope="col">'.$row["TrangThai"].'</th>
                <th scope="col">
                    <button class="btn btn-secondary" style="display: block;" name="dangxl">Đang xử lý</button>
                    <button class="btn btn-secondary" style="display: block;margin-top: 5px;"name="daht">Đã Hoàn Thành</button>
                    <button class="btn btn-secondary" style="display: block;margin-top: 5px;">Sửa</button>
                </th>
            </tr>
        </form>
        ';
    }
    echo"</tbody>
    </table>
</div>";
?>