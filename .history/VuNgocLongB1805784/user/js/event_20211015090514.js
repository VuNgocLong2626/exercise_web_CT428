
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

var btn = document.getElementById("dangK");
btn.addEventListener("mouseover", function() {
	console.log('ok');
});

function checkDiaChi(){
    var Hten = document.getElementById("Hten").value;
    if(Hten != null){
        console.log('ok');
    }
}
