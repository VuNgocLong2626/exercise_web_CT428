var maloaisua = "";

function getMaloaiTenloai(loai, ten) {
  maloaisua = loai;
  document.getElementById("maloai").value = loai;
  document.getElementById("tenloai").value = ten;
}

function checkMaloai() {
  var maloai = document.getElementById("maloai").value;
  window.alert(maloai + " ahhihi");
}
