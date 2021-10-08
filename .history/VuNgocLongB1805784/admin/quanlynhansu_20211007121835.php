
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
            <label for="" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="pword" id="pword" value="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Xác Nhân Mật khẩu</label>
            <input type="password" class="form-control" name="xnpword" id="xnpword" value="">
        </div>
        <button type="submit" class="btn btn-secondary" name="themloainhansu" >Thêm nhân sự</button>
        <button type="submit" class="btn btn-secondary" name="capnhatnhansu" onmouseover="checkMaloai()">Cập nhật nhân sự</button>
    </form>
</div>
