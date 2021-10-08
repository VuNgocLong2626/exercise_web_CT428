<div class="from-sach">
    <form name="quanlysach" method="post" action="process/process_quanlysach.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="" class="form-label">MSHH</label>
            <input type="text" class="form-control" name="mshh" id="mshh" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên sách</label>
            <input type="text" class="form-control" name="tensach" id="tensach" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="hinhanh" name="hinhanh" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Loại sách</label>
            <select class="form-select" name="maloai">
                <?php
                    $result = $conn->query("SELECT * FROM loaihanghoa");
                    $i=1;
                    while($row = $result->fetch_assoc()){
                        echo "<option value=" .$row["MaLoaiHang"]. ">" .$row["TenLoaiHang"]. "</option>";
                        $i++;
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Quy Cách</label>
            <textarea class="form-control" id="quycach" rows="5" name="quycach" style="resize:none;width:100%;" ></textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Giá</label>
            <div class="input-group">
                <input type="text" class="form-control" name="gia" id="gia">
                <span class="input-group-text">VNĐ</span>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="soluong" id="soluong" value="">
        </div>
        
        <button type="submit" class="btn btn-secondary" name="themsach" id="themsach" onmouseover="">Thêm Sách</button>
        <button type="submit" class="btn btn-secondary" name="capnhatsach" id="capnhatsach" onmouseover="">Cập nhật Sách</button>
    </form>
</div>

<div style="width: 80%; margin: 50px auto; ">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">MSHH</th>
                <th scope="col">Tên sách</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Loại Sách</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Xử lý</th>
            </tr>   
        </thead>
        <tbody>

<?php
    $result = $conn->query("select h.MSHH, h.TenHH, hh.TenHinh, lh.TenLoaiHang, h.Gia, h.SoluongHang from `hanghoa` h join `hinhminhhoa` hh on hh.MSHH = h.MSHH join `loaihanghoa` lh on h.MaLoaiHang = lh.MaLoaiHang");
    $i=1;
    while($row = $result->fetch_assoc()){
        echo '<tr>
                <th scope="col">' .$row["MSHH"]. '</th>
                <th scope="col">' .$row["TenHH"]. '</th>
                <th scope="col"> <img src="./uploads/' .$row["TenHinh"]. '" alt=""> </th>
                <th scope="col">' .$row["TenLoaiHang"]. '</th>
                <th scope="col">' .$row["Gia"]. '</th>
                <th scope="col">' .$row["SoluongHang"]. '</th>
                <th scope="col">
                <a class="btn btn-secondary btn-size-s" href="process/process_quanlynhansu.php?msnsXoa=' ."". '">Xóa</a>
                <button class="btn btn-secondary btn-size-s">Sửa</button>
                </th>
            <tr>';
            $i++;
    }
    echo"</tbody>
    </table>
</div>";
?>
