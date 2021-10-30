function checkDiaChi(){
    var diachi = document.getElementById("diachi").value;
    if(!diachi){
        window.alert("Vui lòng nhập địa chỉ !!!");
    }
}
function checkDangKy(){
    var hten = document.getElementById('Hten').value;
    var cty = document.getElementById('cty').value;
    var telephone = document.getElementById('telephone').value;
    var sofax = document.getElementById('sofax').value;
    var password = document.getElementById('password').value;
    var diachi = document.getElementById('diachi').value;
    if(checkNull(hten) && checkNull(cty) && checkNull(telephone) && checkNull(sofax) && checkNull(password) && checkNull(diachi)){
        window.alert("Vui lòng Điền Đầy Đủ Thông Tin !!!");
    }
    else if(telephone.length < 10){
        window.alert("Vui lòng Số Điện Thoại Lớn 10 chữ số!!!");
    }
}

function checkDangNhap(){
    var telephone = document.getElementById('telephone').value;
    var password = document.getElementById('password').value;
     if(checkNull(telephone) && checkNull(password)){
        window.alert("Vui lòng Điền Đầy Đủ Thông Tin !!!");
     }
}
function CheckDN(k){
    var h = document.getElementById('chieucaoid');
    if(!k){
        window.alert("Vui lòng đăng nhập để thanh toán !!!");
    }
    else if( h == null){
        window.alert("Chưa có sản phẩm. Vui lòng thêm sản phẩm !!!");
    }

}

function checkNull(val) {
  return !val;
}
