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
            <label for="" class="form-label">PassWord</label>
            <input type="text" class="form-control" name="pword" id="pword" value="">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloai" >Thêm Loại</button>
        <button type="submit" class="btn btn-secondary" name="capnhat" onmouseover="checkMaloai()">Cập nhật</button>
    </form>
</div>
