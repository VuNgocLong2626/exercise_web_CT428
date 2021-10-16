<div class="from-register">
    <form name="dangky" method="post" action="process_dangnhap_dangxuat.php">
        <div class="mb-3">
            <label for="" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="Hten" name="Hten">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Tên công ty</label>
            <input type="text" class="form-control" id="cty" name="cty">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="telephone" name="telephone">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Số Fax</label>
            <input type="text" class="form-control" id="sofax" name="sofax">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Địa chỉ</label>
            <textarea class="form-control" id="diachi" rows="5" name="diachi" style="resize:none;width:100%;" ></textarea>
        </div>
        <button class="btn btn-secondary" name="dangK" onmouseover="checkDiaChi()">Đăng ký</button>
    </form>
</div>