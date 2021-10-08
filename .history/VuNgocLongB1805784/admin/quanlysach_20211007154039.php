<div class="from-sach">
    <form name="quanlyloai" method="post" action="process/process_quanlynhansu.php">
        <div class="mb-3">
            <label for="" class="form-label">MSHH</label>
            <input type="text" class="form-control" name="mshh" id="mshh" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên sách</label>
            <input type="text" class="form-control" name="tensach" id="tensach" value="">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Hình ảnh</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Mã loại sách</label>
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
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">VNĐ</span>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Xác Nhân Mật khẩu</label>
            <input type="password" class="form-control" name="xnpword" id="xnpword" value="">
        </div>
        
        <button type="submit" class="btn btn-secondary" name="themloainhansu" onmouseover="checkPassWord()">Thêm nhân sự</button>
        <button type="submit" class="btn btn-secondary" name="capnhatnhansu" onmouseover="checkManhasu()">Cập nhật nhân sự</button>
    </form>
</div>