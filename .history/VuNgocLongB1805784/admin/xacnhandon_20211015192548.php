
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

    }
    echo"</tbody>
    </table>
</div>";
?>