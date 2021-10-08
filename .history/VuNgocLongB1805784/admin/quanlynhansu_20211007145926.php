
<div class="from-nhansu">
    <form name="quanlynhansu" method="post" action="process/process_quanlynhansu.php">
        <div class="mb-3">
            <label for="" class="form-label">MSNV</label>
            <input type="text" class="form-control" name="msnv" id="msnv" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name="hotenNV" id="hotenNV" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Chức vụ</label>
            <input type="text" class="form-control" name="chucvu" id="chucvu" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="sdt" id="sdt" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="pword" id="pword" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Xác Nhân Mật khẩu</label>
            <input type="password" class="form-control" name="xnpword" id="xnpword" value="">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloainhansu" onmouseover="checkPassWord()">Thêm nhân sự</button>
        <button type="submit" class="btn btn-secondary" name="capnhatnhansu" onmouseover="checkManhasu()">Cập nhật nhân sự</button>
    </form>
</div>

<div style="width: 95%; margin: 50px auto; ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã số nhân viên</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Số điện thoại</th>
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

