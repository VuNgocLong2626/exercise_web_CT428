<?php
echo"Quản lý nhân sự ấdasdas";
?>

<div class="from-nhansu">
    <form name="quanlyloai" method="post" action="process/process_quanlyloai.php">
        <div class="mb-3">
            <label for="" class="form-label">MSNV</label>
            <input type="text" class="form-control" name="msnv" id="msnv" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên Loại</label>
            <input type="text" class="form-control" name="tenloai" id="tenloai" value="">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloai" >Thêm Loại</button>
        <button type="submit" class="btn btn-secondary" name="capnhat" onmouseover="checkMaloai()">Cập nhật</button>
    </form>
</div>
