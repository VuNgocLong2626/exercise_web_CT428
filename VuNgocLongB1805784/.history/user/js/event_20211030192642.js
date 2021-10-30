function checkDiaChi(){
    var diachi = document.getElementById("diachi").value;
    if(!diachi){
        window.alert("Vui lòng nhập địa chỉ !!!");
    }
}
function checkDangKy(){
    console.log('ok');
}

function checkDangNhap(){
    console.log('ok');
}
function CheckDN(k){
    var h = document.getElementById('chieucaoid').getAttribute('height');
    console.log(h);
    if(k){
        console.log('ok');
    }
    else{
        window.alert("Vui lòng đăng nhập để thanh toán !!!");
        break;
    }

    if(h == null) window.alert("Chưa có sản phẩm. Vui lòng thêm sản phẩm !!!");
}

function checkNull(val) {
  return !val;
}

