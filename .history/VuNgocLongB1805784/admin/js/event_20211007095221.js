var maloaisua = "";

function getMaloaiTenloai(loai, ten) {
  maloaisua = loai;
  document.getElementById("maloai").value = loai;
  document.getElementById("tenloai").value = ten;
}

function checkMaloai() {
  console.log(maloaisua);
}
