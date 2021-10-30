function checkDiaChi(){
    var diachi = document.getElementById("diachi").value;
    if(!diachi){
        window.alert("Vui lòng nhập địa chỉ !!!");
    }
}
function checkDangKy(){
    var hten = document.getElementById('Hten');
    var cty = document.getElementById('cty');
    var telephone = document.getElementById('telephone');
    var sofax = document.getElementById('sofax');
    var password = document.getElementById('password').value;
    var diachi = document.getElementById('diachi');
    console.log(checkNull(hten));
    console.log(password);
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
