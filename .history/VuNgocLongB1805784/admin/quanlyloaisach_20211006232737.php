<?php
	if(isset($_GET['sua'])){
		include "process/mysql_connect.php";
		$sua=$_GET['sua'];
		$row_sua = $conn->query("SELECT * FROM loaihanghoa WHERE MaLoaiHang ='$sua'");
        echo"aojojo";
	}
	else{
		$row_sua['MaLoaiHang']=' ';
		$row_sua['TenLoaiHang']=' ';
	}
?>

<div class="from-loai">
    <form name="quanlyloai" method="post" action="process/process_quanlyloai.php">
        <div class="mb-3">
            <label for="" class="form-label">Mã số Loại</label>
            <input type="text" class="form-control" name="maloai" value = "123">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" name="tenloai" value = " ">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloai">Thêm Loại</button>
        <button type="submit" class="btn btn-secondary" name="capnhat">Cập nhật</button>
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
        echo '<tr>
                <th scope="col">' .$maloai. '</th>
                <th scope="col">' .$row["TenLoaiHang"]. '</th>
                <th scope="col">
                <a class="btn btn-secondary btn-size-s" href=process/process_quanlyloai.php?maloaihang=' .$maloai. '">Xóa</a>
                <a class="btn btn-secondary btn-size-s" href="quanlyloaisach.php?sua=' .$maloai. '">Sửa</a>
                </th>
            <tr>';
            $i++;
    }
    echo "</tbody>
        </table>
    </div>";
?>