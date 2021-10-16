
function CheckDN(k){
    if(k){
        console.log('ok');
    }
    else{
        window.alert("Vui lòng đăng nhập để thanh toán !!!")
    }
}

function checkNull(val) {
  return !val;
}

function checkDiaChi(){
    var Hten = document.getElementById("Hten").value;
    if(Hten != null){
        console.log('ok');
    }
}
