var maloaisua = "";

function getMaloaiTenloai(loai, ten) {
  maloaisua = loai;
  document.getElementById("maloai").value = loai;
  document.getElementById("tenloai").value = ten;
}

function checkMaloai() {
  var maloai = document.getElementById("maloai").value;
  if (maloaisua == maloai || maloaisua == "") {
    window.alert("ok");
  } else {
    window.alert(maloai + " ahhihi");
  }
}
