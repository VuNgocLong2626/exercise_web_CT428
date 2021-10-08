var maloaisua = "";
var manhansu = "";
var mahanghoa = "";

function getMaloaiTenloai(loai, ten) {
  maloaisua = loai;
  document.getElementById("maloai").value = loai;
  document.getElementById("tenloai").value = ten;
}

function checkMaloai() {
  var maloai = document.getElementById("maloai").value;
  if (maloaisua == maloai || maloaisua == "") {
    console.log("ok");
  } else {
    window.alert("Không Sửa Mã Loại");
  }
}

function getAllNS(msns, hten, chucvu, sdt) {
  manhansu = msns;
  document.getElementById("msnv").value = msns;
  document.getElementById("hotenNV").value = hten;
  document.getElementById("chucvu").value = chucvu;
  document.getElementById("sdt").value = sdt;
}

function checkPassWord() {
  var pw = document.getElementById("pword").value;
  var pw1 = document.getElementById("xnpword").value;
  if (pw != pw1) {
    window.alert("Mật Khẩu không được xác thực");
  }
}

function checkManhasu() {
  var msnv = document.getElementById("msnv").value;
  if (manhansu == msnv || manhansu == "") {
    console.log("ok");
  } else {
    window.alert("Không Sửa Mã Loại");
  }
}

function getAllSach(mshh, tensach, quycach, gia, soluong) {
  mahanghoa = mshh;
  console.log(mshh);
  document.getElementById("mshh").value = mshh;
  document.getElementById("tensach").value = tensach;
  //   document.getElementById("hinhanh").value = hinhanh;
  document.getElementById("quycach").value = quycach;
  document.getElementById("gia").value = gia;
  document.getElementById("soluong").value = soluong;
}
