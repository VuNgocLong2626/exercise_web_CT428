
<div class="from-loai">
    <form name="quanlyloai" method="post" action="process/process_quanlyloai.php">
        <div class="mb-3">
            <label for="" class="form-label">Mã số Loại</label>
            <input type="text" class="form-control" name="maloai" id="maloai" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" name="tenloai" id="tenloai" value="">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloai" >Thêm Loại</button>
        <button type="submit" class="btn btn-secondary" name="capnhat" onclick="getMaloaiTenloai();">Cập nhật</button>
    </form>
</div>

<div style="width: 80%; margin: 50px auto; ">
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
        $maloai = $row["MaLoaiHang"];
        $tenloai = $row["TenLoaiHang"];
        echo '<tr>
                <th scope="col">' .$maloai. '</th>
                <th scope="col">' .$tenloai. '</th>
                <th scope="col">
                <a class="btn btn-secondary btn-size-s" href="process/process_quanlyloai.php?maloaihang=' .$maloai. '">Xóa</a>
                <button onclick="getMaloaiTenloai(\'' .$maloai. '\',\'' .$tenloai. '\');" class="btn btn-secondary btn-size-s">Sửa</button>
                </th>
            <tr>';
            $i++;
    }
    echo "</tbody>
        </table>
    </div>";
?>