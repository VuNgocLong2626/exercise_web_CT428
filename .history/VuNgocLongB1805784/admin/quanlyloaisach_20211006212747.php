
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
    $i++;
    while($row = $result->fetch_assoc()){
        echo '<th scope="col">' .$row["lastname"]. '.</th>
            <th scope="col">Tên loại</th>
            <th scope="col">Xử lý</th>/';
    }
    echo "</tbody>
        </table>";
?>