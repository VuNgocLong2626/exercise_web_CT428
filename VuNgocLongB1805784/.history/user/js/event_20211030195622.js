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
}

function checkDangNhap(){
    console.log('ok');
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
