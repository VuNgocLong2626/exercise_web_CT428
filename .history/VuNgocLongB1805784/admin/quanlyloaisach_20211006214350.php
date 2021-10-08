
<div class="from-loai">
    <form name="quanlyloai" method="post" action="process/process_quanlyloai.php">
        <div class="mb-3">
            <label for="" class="form-label">Mã số Loại</label>
            <input type="text" class="form-control" name="maloai">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" name="tenloai">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloai">Thêm Loại</button>
        <button type="submit" class="btn btn-secondary" name="capnhat">Cập nhật</button>
    </form>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã số loại</th>
                <th scope="col">Tên loại</th>
                <th scope="col">Xử lý</th>
            </tr>   
        </thead>
        <tbody>
<?php
    $result = $conn->query("SELECT * FROM loaihanghoa");
    $i=1;
    while($row = $result->fetch_assoc()){
        echo '<tr>
                <th scope="col">' .$row["MaLoaiHang"]. '</th>
                <th scope="col">' .$row["TenLoaiHang"]. '</th>
                <th scope="col">
                <a class="btn btn-secondary btn-size-s" href="quanlyloaisach.php">Thêm Sản Phẩm</a>
                <a class="btn btn-secondary btn-size-s" href="quanlyloaisach.php">Quản lý loại sách</a>
                </th>
            <tr>';
            $i++;
    }
    echo "</tbody>
        </table>
    </div>";
?>